function url_img(id, url_list){
    document.querySelector(".slider").innerHTML = '';
    
    let url_array = url_list.split(';');

    for (let i=0; i<url_array.length; i++){
        
        let percentage = url_array.length + '00%';
        document.querySelector(".slider").style.cssText = `width: ${percentage};`;

        let img = url_array[i];
        let divNuevo = document.createElement('div');
        divNuevo.classList.add('slider_section');
        divNuevo.innerHTML = `<img src="${img}" alt="" class="slider_img">`;

        document.querySelector(".slider").appendChild(divNuevo);
    }
    
    
    const slider = document.querySelector("#slider");
    let sliderSection = document.querySelectorAll(".slider_section");
    let sliderSectionLast = sliderSection[sliderSection.length -1];

    const btnLeft = document.querySelector("#btn_left");
    const btnRight = document.querySelector("#btn_right");

    slider.insertAdjacentElement('afterbegin', sliderSectionLast);

    function next(){
        let sliderSectionFirst = document.querySelectorAll(".slider_section")[0];
        slider.style.marginLeft = '-200%';
        slider.style.transition = 'all 0.5s';
        
        setTimeout(function(){
            slider.style.transition = 'none';
            slider.insertAdjacentElement('beforeend', sliderSectionFirst);
            slider.style.marginLeft = '-100%';
        }, 500);
    }

    function prev(){
        let sliderSection = document.querySelectorAll(".slider_section");
        let sliderSectionLast = sliderSection[sliderSection.length - 1];
        slider.style.marginLeft = '0';
        slider.style.transition = 'all 0.5s';

        setTimeout(function(){
            slider.style.transition = 'none';
            slider.insertAdjacentElement('afterbegin', sliderSectionLast);
            slider.style.marginLeft = "-100%";
        }, 500);
    }

    btnRight.addEventListener('click', function(){
        next();
    });

    btnLeft.addEventListener('click', function(){
        prev();
    });

    carga_description(id);
    //let coments = document.getElementById(carpeta).innerText;
    //document.getElementById('coments_modal').innerText = coments;
}

function carga_description(id){
    datos = 'id='+id;
    const http = new XMLHttpRequest();
    const url = 'description.php';
    http.open("POST", url);
    http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    http.setRequestHeader("X-Requested-With", "XMLHttpRequest");
    http.send(datos);

    http.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200){
            if (this.responseText){
                document.getElementById('modal_description').innerText = this.responseText;
            }
        }
    }
}


function contactEmail(){

    datos = 'name='+document.getElementById('name').value +
            '&email='+document.getElementById('email').value + 
            '&asunto='+document.getElementById('asunto').value +
            '&mensaje='+document.getElementById('mensaje').value;

    const http = new XMLHttpRequest();
    const url = 'sendEmail.php';
    http.open("POST", url);
    http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    http.setRequestHeader("X-Requested-With", "XMLHttpRequest");
    http.send(datos);

    http.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200){
            if (this.responseText){
                alert(this.responseText);
                //alert('Mensaje enviado exitosamente');
            }
        }
    }
}
