window.addEventListener('load', function() {
  // Get references to HTML elements
  const audioPlayer = document.getElementById('audio-player');
  const playButton = document.getElementById('play-btn');
  const pauseButton = document.getElementById('pause-btn');
  const seekBar = document.getElementById('seek-bar');
  const songList = document.getElementById('song-list');

  // Create an array of songs
  const songs = [
    { name: 'The weekend Starboy', path: 'music/Playlist 2/The_Weeknd_-_Starboy_(Lyrics)_ft._Daft_Punk(128k).mp3' },
    { name: 'Are are are', path: 'music/Playlist 2/Are_Are_Are(128k).mp3' },
    { name: 'Night changes', path: 'music/Playlist 2/Night_changes' },
    { name: 'Imran khan Satisfya', path: 'music/Playlist 2/Imran_Khan_-_Satisfya_(Official_Music_Video)(128k).mp3' },
    { name: 'See you again', path: 'music/Playlist 2/Wiz_Khalifa_-_See_You_Again_(Lyrics)_ft._Charlie_Puth(480p).mp3' },
    { name: 'Har har shambhu', path: 'music/Playlist 2/Har_Har_Shambhu_Shiv_Mahadeva___sanand_manand_vane___Abhilipsa_Panda___Jeetu_Sharma___shiv_stotra(128k).mp3' },
    { name: 'Karpur gauram', path: 'music/Playlist 2/Karpur_Gauram_Trap_(Remix)(128k).mp3' },
    { name: 'Aasma ko chukar dekho', path: 'music/Playlist 2/Aasma_ko_chukar_dekho__hanuman_returns_song__Movie_MAZA(128k).mp3' },
    { name: 'Aatma Rama' , path: 'music\Playlist 1\Atama rama.mp3'},
    { name: '' , path: ''},
    { name: '' , path: ''},
    { name: '' , path: ''},
    { name: '' , path: ''},
    { name: '' , path: ''},
    { name: '' , path: ''}
  ];

  let currentSongIndex = 0;

  // Function to create the playlist
  function createPlaylist() {
    songs.forEach(function(song, index) {
      const li = document.createElement('li');
      li.textContent = song.name;
      li.addEventListener('click', function() {
        playSong(index);
      });
      songList.appendChild(li);
    });
  }

  // Function to play a selected song
  function playSong(index) {
    const selectedSong = songs[index];
    audioPlayer.src = selectedSong.path;
    audioPlayer.play();
    currentSongIndex = index;
  }

  // Function to play or pause the current song
  function togglePlayPause() {
    if (audioPlayer.paused) {
      audioPlayer.play();
    } else {
      audioPlayer.pause();
    }
  }

  // Add event listeners for play, pause, and seek bar
  playButton.addEventListener('click', function() {
    togglePlayPause();
  });

  pauseButton.addEventListener('click', function() {
    togglePlayPause();
  });

  seekBar.addEventListener('input', function() {
    const seekTime = audioPlayer.duration * (seekBar.value / 100);
    audioPlayer.currentTime = seekTime;
  });

  audioPlayer.addEventListener('timeupdate', function() {
    const seekPercentage = (audioPlayer.currentTime / audioPlayer.duration) * 100;
    seekBar.value = seekPercentage;
  });

  audioPlayer.addEventListener('ended', function() {
    // Play the next song when the current song ends
    const nextSongIndex = (currentSongIndex + 1) % songs.length;
    playSong(nextSongIndex);
  });

  // Call the function to create the playlist
  createPlaylist();
});