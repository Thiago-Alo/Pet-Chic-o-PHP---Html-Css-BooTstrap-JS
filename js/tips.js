
function hiddenText(){
let vetAccordionContent = document.querySelectorAll(".vet-accordion-content");
let size = 50
let sizemax = 150

vetAccordionContent.forEach((item, ) => {
    let title = item.querySelector(".info");
    title.addEventListener("click", () => {
        item.classList.toggle("open");
       
        if(item.classList.contains("open")){
            document.getElementById('hidden').style.height = sizemax+"px"
        }else{
            document.getElementById('hidden').style.height = size+"px"
        }
    })
})
}



    
    




/*vetAccordionContent.forEach((item, index) => {
    let title = item.querySelector(".info");
    title.addEventListener("click", () => {
        item.classList.toggle("open");

        let description = item.querySelector(".vet-accordion-content");
        if(item.classList.contains("open")){
            vetAccordionContent.style.height =  `${description.scrollHeight}px`;
        }else{
            vetAccordionContent.style.height = "250px";
        }
        console.log(description)
    })
})*/



/*
let tamanho = 50
document.getElementsByClassName('info').style.fontSize = tamanho+"px"
function hiddenText(){
    let tamanho = document.getElementsByClassName('info').style.fontSize
    tamanho = tamanho.replace("px", "")
    tamanho = 250
    document.getElementsByClassName('info').style.fontSize = tamanho+"px"
}*/