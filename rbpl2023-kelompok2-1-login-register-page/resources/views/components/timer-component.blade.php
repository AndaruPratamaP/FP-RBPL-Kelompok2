<div class="timer">
    <span id="timer-display" onclick="showInput()">{{ $minutes }} : {{ $seconds }}</span>
    <div id="input-container" style="display: none; margin-left:3px">
        <input style="width: 10%; background-color:transparent; border:none; outline:none" type="text" id="minutes-input" value="{{ $minutes }}" min="0" step="1" placeholder="Min">
        <span>:</span>
        <input style="width: 10%; background-color:transparent; border:none; outline:none" type="text" id="seconds-input" value="{{ $seconds }}" min="0" step="1" placeholder="Sec">
        <button id="set-timer-btn" onclick="setTimer()" style="background-color:transparent; border:none; outline:none"><i class="fa-solid fa-check"></i></button>
    </div>
    <button id="play-btn" onclick="startTimer()" disabled style="background-color:transparent; border:none; outline:none"><i class="fa-solid fa-play"></i></button>
    <button id="stop-btn" onclick="stopTimer()" disabled style="background-color:transparent; border:none; outline:none"><i class="fa-solid fa-pause"></i></button>
    <button id="reset-btn" onclick="resetTimer()" style="display: none;background-color:transparent; border:none; outline:none">Reset</button>
</div>

<script>
    var timerInterval;
    var timerDisplay = document.getElementById('timer-display');
    var inputContainer = document.getElementById('input-container');
    var minutesInput = document.getElementById('minutes-input');
    var secondsInput = document.getElementById('seconds-input');
    var setTimerBtn = document.getElementById('set-timer-btn');
    var playBtn = document.getElementById('play-btn');
    var stopBtn = document.getElementById('stop-btn');
    var resetBtn = document.getElementById('reset-btn');
    var totalTime = 0;

    function showInput() {
        timerDisplay.style.display = 'none';
        inputContainer.style.display = 'block';
        playBtn.disabled = true;
        stopBtn.disabled = true;
    }

    function hideInput() {
        timerDisplay.style.display = 'inline-block';
        inputContainer.style.display = 'none';
    }

    function setTimer() {
        var minutes = parseInt(minutesInput.value);
        var seconds = parseInt(secondsInput.value);
        if (isNaN(minutes) || minutes < 0) {
            minutes = 0;
        }
        if (isNaN(seconds) || seconds < 0) {
            seconds = 0;
        }

        totalTime = minutes * 60 + seconds;
        timerDisplay.textContent = formatTime(minutes, seconds);
        minutesInput.value = minutes;
        secondsInput.value = seconds;
        hideInput();
        playBtn.disabled = false;
        stopBtn.disabled = false;
    }

    function formatTime(minutes, seconds) {
        var formattedMinutes = minutes < 10 ? '0' + minutes : minutes;
        var formattedSeconds = seconds < 10 ? '0' + seconds : seconds;
        return formattedMinutes + ' : ' + formattedSeconds;
    }

    function startTimer() {
        timerInterval = setInterval(function() {
            if (totalTime <= 0) {
                clearInterval(timerInterval);
                timerDisplay.textContent = 'Time\'s up!';
                stopBtn.style.display = 'none';
                resetBtn.style.display = 'inline-block';
                return;
            }

            var minutes = Math.floor(totalTime / 60);
            var seconds = totalTime % 60;

            timerDisplay.textContent = formatTime(minutes, seconds);
            totalTime--;
        }, 1000);

        hideInput();
        playBtn.disabled = true;
        stopBtn.disabled = false;
        resetBtn.style.display = 'none';
        stopBtn.style.display = 'inline-block';
    }

    function stopTimer() {
        clearInterval(timerInterval);
        playBtn.disabled = false;
        stopBtn.style.display = 'none';
        resetBtn.style.display = 'inline-block';
    }

    function resetTimer() {
        clearInterval(timerInterval);
        timerDisplay.textContent = '{{ $minutes }} : {{ $seconds }}';
        hideInput();
        playBtn.disabled = false;
        stopBtn.style.display = 'inline-block';
        resetBtn.style.display = 'none';
        totalTime = 0;
    }
</script>
