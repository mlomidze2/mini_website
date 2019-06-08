let smallImgContainer = document.getElementById("smallImgContainer")
let btn = document.getElementById("btn")
let warningContainer = document.getElementById("warningContainer")
let bigImg = document.createElement("img")
bigImg.className = ('bigImg')
bigImgContainer.appendChild(bigImg)


// Add warning conteiner paragraph
let paragraph = document.createElement("p")
paragraph.id = 'para'
warningContainer.appendChild(paragraph)

// Image src array for checking if the image already exists
let srcArr = []
for (let i = 0; i < smallImgContainer.childElementCount; i++){
    srcArr[i]= smallImgContainer.children[i].src
}

// Small image click and big image change
smallImgContainer.addEventListener('click',function imgClick(e){
    bigImg.src = e.target.src
})

// Text after clicking the button
function warningGenerator(txt){
    paragraph.textContent = txt
}

// Add small image to the gallery
function addSmallImage(src){
    let newImg = document.createElement('img')
    newImg.className = "smallImg"
    smallImgContainer.appendChild(newImg)
    newImg.src = src
    srcArr.push(src)
}

// Submit click
btn.addEventListener('click', function (){
    let inputValue = document.getElementById('input').value

    if (!inputValue){
        warningGenerator("You must type something !")
    }else if (srcArr.indexOf(inputValue) == -1){
        // add image
        addSmallImage(inputValue)
        warningGenerator("The item was successfully added to the list !")
    }else{
        warningGenerator("The item already exists in the list !")
    } 
})