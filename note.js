const edit=document.querySelectorAll(".edit");
        const editTitle=document.getElementById("edittitle");
        const editdesc=document.getElementById("editdesc");
        const hiddenInput=document.getElementById("hidden");
        
        edit.forEach(element =>{
            element.addEventListener("click",()=>{
           const titleText=element.parentElement.children[0].innerText;
           const descText=element.parentElement.children[1].innerText;
           editTitle.value=titleText;
           editdesc.value=descText;
           hiddenInput.value=element.id;
           

        })}
    );

    const search = document.getElementById('search');

    if (search) {
    search.addEventListener("keyup", () => {
        const value = search.value.toLowerCase();
        const cardBody = document.querySelectorAll(".card-body");
        cardBody.forEach(element => {
            const titleText = element.children[0].innerText.toLowerCase();
            const descText = element.children[1].innerText.toLowerCase();
            if (titleText.includes(value) || descText.includes(value)) {
                element.parentElement.style.display = "block";
            } else {
                element.parentElement.style.display = "none";
            }
        })
    });
}