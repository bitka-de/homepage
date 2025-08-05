import './bootstrap';
if (window.innerWidth < 620) {
    const stickyElement = document.querySelector('.sticky');
    const balls = document.querySelectorAll('.ball');
    function checkBallsVisibility() {
        if (!stickyElement || balls.length === 0) return;
        const threshold = 4 * parseFloat(getComputedStyle(document.documentElement).fontSize); // 4rem in px

        balls.forEach((ball, i) => {
            // If there's a next ball, check its position
            if (i < balls.length - 1) {
                const nextBallRect = balls[i + 1].getBoundingClientRect();
                const ballRect = ball.getBoundingClientRect();
                const isNextBallNearTop = nextBallRect.top < threshold;

                // Check for overlap
                const isOverlapping = (
                    ballRect.bottom > nextBallRect.top &&
                    ballRect.top < nextBallRect.bottom
                );

                ball.style.transition = 'opacity 0.3s cubic-bezier(0.4,0,0.2,1), transform 0.3s cubic-bezier(0.4,0,0.2,1), filter 0.3s cubic-bezier(0.4,0,0.2,1)';

                if (isNextBallNearTop) {
                    ball.style.opacity = '0';
                    ball.style.transform = 'translateX(100px)';
                    ball.style.filter = 'none grayscale(100%)';
                } else if (isOverlapping) {
                    ball.style.opacity = '0.5';
                    ball.style.transform = 'translateX(0)';
                    ball.style.filter = 'blur(4px) grayscale(100%)';
                } else {
                    ball.style.opacity = '1';
                    ball.style.transform = 'translateX(0)';
                    ball.style.filter = 'grayscale(0%)'; // Remove grayscale when scrolling back up
                }
            } else {
                // Last ball: keep visible
                ball.style.opacity = '1';
                ball.style.transform = 'translateX(0)';
                ball.style.filter = 'grayscale(0%)'; // Remove grayscale when scrolling back up
            }
        });
    }

    function onScrollOrResize() {
        requestAnimationFrame(checkBallsVisibility);
    }

    window.addEventListener('scroll', onScrollOrResize);
    window.addEventListener('resize', onScrollOrResize);
    checkBallsVisibility();
}
