//Drag and drop
const itembox = document.querySelector(".dragbox");
var item = document.querySelectorAll(".box02__item");
//var id_array = [];

item.forEach(elemento => {
    elemento.addEventListener('dragstart', () =>{
        elemento.classList.add('dragging')
        //id_array = []
    })
    elemento.addEventListener('dragend', () =>{
        elemento.classList.remove('dragging')

        /*
        for(i=0; i<(item.length-1); i++){
            item[i].id = i
            id_array.push(item[i].id)
        }
        */
    })
})

itembox.addEventListener('dragover', e =>{
    e.preventDefault()
    const afterElement = getDragAfterElement(itembox, e.clientY)
    const item = document.querySelector(".dragging")
    if(afterElement == null){
        itembox.appendChild(item)
    }
    else{
        itembox.insertBefore(item, afterElement)
    }
})

function getDragAfterElement(itembox, y){
    const draggableItems = [...itembox.querySelectorAll('.box02__item:not(.dragging)')]

    return draggableItems.reduce((closest, child) => {
        const box = child.getBoundingClientRect()
        const offset = y - box.top - box.height / 2
        if(offset<0 && offset> closest.offset){
            return {offset: offset, element: child}
        }else{
            return closest
        }
    }, {offset: Number.NEGATIVE_INFINITY}).element
}