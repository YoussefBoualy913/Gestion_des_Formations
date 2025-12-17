function validation(){
    const form =document.querySelector('.course-form');
    if(form){
    form.addEventListener('submit',(e)=>{
        console.log("hhhhh");
        const title = document.querySelector('#title');
        const level = document.querySelector('#level');
        const  position= document.querySelector('#position');
        if (title.value == ''){
              e.preventDefault();
            window.alert("le titre ne doit etre pas vide!")
            return;
          }
          if (level){
          if (level.value == ''){
             e.preventDefault();
            window.alert("le level ne doit etre pas vide!")
            return;
          }}
          if (position){
          if (position.value == ''){
             e.preventDefault();
            window.alert("la position ne doit etre pas vide!")
            return;
          }}
          

        })}
   

    const deconnect=document.querySelector('.deconnect');
    if(deconnect){
    deconnect.addEventListener('click',(e)=>{
     if (!confirm("Voulez-vous vraiment se déconnecte ?")) {
        e.preventDefault(); 
    }
    })}

    const inscricours=document.querySelectorAll('.inscricours');
    if(inscricours){
      inscricours.forEach(element => {
         element.addEventListener('click',(e)=>{
     if (!confirm("Voulez-vous vraiment inscrire a ce cours ?")) {
        e.preventDefault(); 
    }
    })
      });
   }
}
validation();
