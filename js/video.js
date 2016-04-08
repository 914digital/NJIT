 $('#play-video').click(function(){
  $('#video').get(0).play();
});

 $('#close-video').click(function(){
  $('#video').get(0).pause();
  
  });
$('body').on('hidden.bs.modal', '.modal', function () {
$('#video').trigger('pause');
});

window.onload = function() {

  // Video
  var video = document.getElementById("video");

  // Buttons
  var playButton = document.getElementById("play-pause");
  var muteButton = document.getElementById("mute");
  var fullScreenButton = document.getElementById("full-screen");

// Event listener for the play/pause button
playButton.addEventListener("click", function() {
  if (video.paused == true) {
    // Play the video
    video.play();

    // Update the button text to 'Pause'
    playButton.innerHTML = "<i class='fa fa-pause fa-2x'></i>";
  } else {
    // Pause the video
    video.pause();

    // Update the button text to 'Play'
    playButton.innerHTML = "<i class='fa fa-play fa-2x'></i>";
  }
});

// Event listener for the mute button
muteButton.addEventListener("click", function() {
  if (video.muted == false) {
    // Mute the video
    video.muted = true;

    // Update the button text
    muteButton.innerHTML = "<i class='fa fa-microphone fa-2x'></i>";
  } else {
    // Unmute the video
    video.muted = false;

    // Update the button text
    muteButton.innerHTML = "<i class='fa fa-microphone-slash fa-2x'></i>";
  }
});




}