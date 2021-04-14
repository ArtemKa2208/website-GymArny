const img_content = document.querySelectorAll(".content_main img");
const reference_on_photos = document.querySelector(".text_on_photo");
// const news_slider = document.querySelectorAll(".news_slider div");
let counter_slide_img = 0;
// let news_counter_slide_start_position = 0;
// let news_counter_slide_last = news_slider.length-1;
img_content[counter_slide_img].style.display = "block";

setInterval(slide, 5000);

function slide(){
    let length = img_content.length;
    if(counter_slide_img == 0){
        img_content[length-1].style.opacity = "20%";
        img_content[length-1].style.display = "none";
        img_content[counter_slide_img].style.display = "block";
        counter_slide_img++;   
    }else{
        if(counter_slide_img==length){
            counter_slide_img=0;
            img_content[length-1].style.opacity = "20%";
            img_content[length-1].style.display = "none";
            img_content[counter_slide_img].style.display = "block";
            counter_slide_img++; 
        }else{
            img_content[counter_slide_img-1].style.opacity = "20%";
            img_content[counter_slide_img-1].style.display = "none";
            img_content[counter_slide_img].style.display = "block";  
            counter_slide_img++;
        }

    }
}

reference_on_photos.onmouseover = function(){
    for(i = 0; i<img_content.length;i++){
        if(img_content[i].style.display == "block"){
            img_content[i].style.opacity = "100%";
        }
    }
    
}

reference_on_photos.onmouseout = function(){
    for(i = 0; i<img_content.length;i++){
        if(img_content[i].style.display == "block"){
            img_content[i].style.opacity = "20%";
        }
    }
    
}

// if(window.matchMedia("(max-device-width:600px)").matches){
//     news_counter_slide = 2;
//     news_counter_slide_end_position=2;
// }else{
//      news_counter_slide = 3;
//      news_counter_slide_end_position = 3;
// }

// for(let i = news_counter_slide; i<news_slider.length; i++){
//     news_slider[i].style.display = "none";
// }

// button_news_left.onclick = function(){
//  if( news_counter_slide_start_position == 0){
//     news_slider[news_counter_slide_end_position].style.display = "none"; 
//     news_slider[news_counter_slide_last].style.display = "block";
    
//     news_counter_slide_last--;
//     news_counter_slide_start_position++;   
//  }
// }

// setInterval(news_slid, 5000);
// function news_slid(){
//     if(news_counter_slide_start_position==news_slider.length) news_counter_slide_start_position = 0;
//     if(news_counter_slide_end_position==news_slider.length) news_counter_slide_end_position = 0;
//     if(news_counter_slide_start_position==0){
//         news_slider[news_counter_slide_start_position].style.display = "none";
//         news_slider[news_counter_slide].style.display = "block";
//         news_counter_slide_start_position++;
//         news_counter_slide_end_position++;
//     }else{
//         news_slider[news_counter_slide_start_position].style.display = "none"; 
//         news_slider[news_counter_slide_end_position].style.display = "block";  
//         news_counter_slide_start_position++;
//         news_counter_slide_end_position++;
//     }
    

// }

