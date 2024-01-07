const draggables = document.querySelectorAll('.rencana');
const droppables = document.querySelectorAll('.swim-lane');

draggables.forEach((task) => {
    task.addEventListener("dragstart", () => {
        task.classList.add("is-dragging");
    });
    task.addEventListener("dragend", ( ) => {
        task.classList.remove("is-dragging");
    });
});


droppables.forEach((zone)=>{
    zone.addEventListener("dragover",(e)=> {
        e.preventDefault();

        const ButtonTask = insertAboveTask(zone, e.clientY);
        const CurTask = document.querySelector('.is-dragging');

        if (!ButtonTask) {
            zone.appendChild(CurTask);
        }
    });

});


const insertAboveTask = (zone,mouseY) => {
    const els = zone.querySelectorAll(".task:not(is-dragging)");

    let closeTask = null;
    let closesOffset = Number.NEGATIVE_INFINITY;

    els.forEach((task) =>{
        const { top } = task.getBoundingClientRect();

        const offset = mouseY - top;

        if(offset < 0 && offset > closesOffset){
            closesOffset = offset;
            closeTask = task;
        }
    });

    return closeTask;
}