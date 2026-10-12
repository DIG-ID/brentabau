// Hide the hero logo once the background video is actually playing.
// If autoplay is blocked or the video fails, the logo stays over the fallback image.
document.addEventListener('DOMContentLoaded', () => {
  const video = document.querySelector('.section-intro__video');
  if (!video) return;

  const wrapper = video.closest('.section-intro__image');
  const setPlaying = (playing) => wrapper.classList.toggle('is-playing', playing);

  video.addEventListener('playing', () => setPlaying(true));
  video.addEventListener('error', () => setPlaying(false));

  // The video may already be playing before this script runs
  if (!video.paused && video.readyState > 2) setPlaying(true);
});
