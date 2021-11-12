window.onload = function () {
    let hour = document.getElementById('hour');
    let min = document.getElementById('min');
    let sec = document.getElementById('sec');

    time();
    setInterval(time, 1000);

    function time(){
        let data = new Date();
        let s = data.getSeconds();
        let m = data.getMinutes()+s/60;
        let h = data.getHours()+m/60;
        hour.style.transform = "rotate("+h*30+"deg)";
        min.style.transform = "rotate("+m*6+"deg)";
        sec.style.transform = "rotate("+s*6+"deg)";
    }
}