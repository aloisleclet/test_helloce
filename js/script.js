var current = 0;

function transition (e)
{
  let classname = "";
  let last_actor = ""; 

  //direction
 
  if (e.deltaY < 0) //go top
  {
    classname = "hide-top";
    current = current - 1 < -1 ? current - 1 : current;
  }
  else // go bottom
  {
    classname = "hide-bottom";
    current++;
  }
 
  if (last_actor < 0)
  {
    console.log('border'+ current);
    return;
  }
 
  document.getElementById('actor' + current).classList.add(classname);
  last_actor = 'actor'+current; 
  //border

  console.log (current + ' is in the range ?');
  
  console.log('direction: '+classname);

 
  let actor = 'actor'+current;
 
  console.log('actor: '+actor+' last_actor: '+last_actor);
  document.getElementById(actor).classList.add('show');
}

function add_event()
{
  console.log('add_event');
  document.addEventListener("wheel", function (e)
  {
    transition(e);
    setTimeout(add_event, 3000);// 3000 time of the transition
  }, {once : true});
}

add_event();
