window.onload = function () {
    let list = document.getElementById('list');
    let hour = document.getElementById('hour');
    let min = document.getElementById('min');
    let sec = document.getElementById('sec');
    let ico = document.getElementById('ico');
    let css = document.getElementById('css');

    let lis = '';
    for(let i=0;i<60;i++){
        lis += '<li><li>';
        css.innerHTML += "#list li:nth-of-type("+(i+1)+"){transform:rotate("+i*6+"deg)}"
    }
    list.innerHTML = lis;
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