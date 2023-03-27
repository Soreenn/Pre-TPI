
document.addEventListener("DOMContentLoaded", () => {
    var date = new Date(splittedDate[0], splittedDate[1] - 1, splittedDate[2], "08", "00", "00");
    var date1 = moment(splittedDate[0] + '-' + splittedDate[1] + '-' + splittedDate[2] + ' ' + '08:00:00').format("YYYY-MM-DD hh:mm:ss");
    var date2 = moment().format("YYYY-MM-DD hh:mm:ss");
    /* 
        var diffTime = date1 - date2;
        var duration = moment.duration(diffTime * 1000, 'milliseconds');
        var interval = 1000;
    
        setInterval(function () {
            duration = moment.duration(duration - interval, 'milliseconds');
            $('.countdown').text(duration.hours() + ":" + duration.minutes() + ":" + duration.seconds())
        }, interval);
        setInterval(() => {
    
            var difference = moment(date1).diff(date2, 'days');
            var months = difference / 30;
            document.getElementById('seconds').style.setProperty('--value', moment(seconds).format('ss'));
            document.getElementById('minutes').style.setProperty('--value', date.getMinutes());
            document.getElementById('hours').style.setProperty('--value', date.getHours());
            document.getElementById('months').style.setProperty('--value', date.getMonth());
        }, 1000); */

    // Set the date we're counting down to
    var countDownDate = new Date(splittedDate[0] + '-' + splittedDate[1] + '-' + splittedDate[2] + ' ' + '08:00:00').getTime();

    // Update the count down every 1 second
    var x = setInterval(function () {

        // Get today's date and time
        var now = new Date().getTime();

        // Find the distance between now and the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var months = Math.floor(distance / (1000 * 60 * 60 * 24 * 30));
        var days = Math.floor(distance % (1000 * 60 * 60 * 24 * 30) / (1000 * 60 * 60 * 24)) - 2;
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Display the result in the element with id="demo"
        document.getElementById('seconds').style.setProperty('--value', seconds);
        document.getElementById('minutes').style.setProperty('--value', minutes);
        document.getElementById('hours').style.setProperty('--value', hours);
        document.getElementById('days').style.setProperty('--value', days);
        document.getElementById('months').style.setProperty('--value', months);
        document.getElementById('startDate').innerHTML = moment(date1).format("DD-MM-YYYY");
        

        // If the count down is finished, write some text
        if (distance < 0) {
            clearInterval(x);
        }
    }, 1000);
});