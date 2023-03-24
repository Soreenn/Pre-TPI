
document.addEventListener("DOMContentLoaded", () => {
    var date = new Date(splittedDate[0], splittedDate[1] - 1, splittedDate[2], "08", "00", "00");
    var date1 = moment(splittedDate[0] + '-' + splittedDate[1] + '-' + splittedDate[2] + ' ' + '08:00:00').format("YYYY-MM-DD hh:mm:ss");
    var date2 = moment().format("YYYY-MM-DD hh:mm:ss");
    var seconds = moment(date1).diff(date2, "s");
    var minutes = moment(date1).diff(date2, "m");
    console.log(moment(seconds).format('seconds'));
    console.log(moment(minutes).format('mm'));
    setInterval(() => {
        document.getElementById('seconds').style.setProperty('--value', moment(seconds).format('ss'));
        document.getElementById('minutes').style.setProperty('--value', date.getMinutes());
        document.getElementById('hours').style.setProperty('--value', date.getHours());
        document.getElementById('months').style.setProperty('--value', date.getMonth());
    }, 1000);
});