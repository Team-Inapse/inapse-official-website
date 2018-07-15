function timer(){
    // Update time left until Hackathon start (countdown timer)
    var deadline = 1534258800000; // Hackathon starts at 2018.08.15 (KST)
    var x = setInterval(function() {
        var now = new Date().getTime();
        var t = deadline - now;
        var days = Math.floor(t/86400000);
        var hours = Math.floor((t%86400000)/3600000);
        var minutes = Math.floor((t%3600000) / 60000);
        var seconds = Math.floor((t%60000) / 1000);
        document.getElementById("date").innerHTML = days + "일 " + hours + "시간 " + minutes + "분 " + seconds + "초";
        if (t < 0) { clearInterval(x); document.getElementById("date").innerHTML = "0일 0시간 0분 0초"; }
    }, 1000);
    // Referred to : https://www.geeksforgeeks.org/create-countdown-timer-using-javascript/
}
/* <body onload="timer()">
    <div class="timer-title">
        <h1>해커톤까지</h1>
        <h2 id="date">0일 0시간 0분 0초</h2>
        <h3>Inapse 1th Hackathon : <span style="font-style: italic;">Rendezvous of the Past and the Future</span></h3>
    </div>
</body> */
