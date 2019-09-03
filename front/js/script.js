var current = document.getElementsByClassName('card').length - 1;
var max = current;
var min = 0;


function transition (e)
{
  let classname = "";
  

  //hide old card
  
  document.getElementById('actor'+current).classList.remove('show');
  if (e.deltaX < 0) //go right
  {
    classname = "hide-right";
    if (document.getElementById('actor'+current).classList.contains("hide-left")) //todo factor that ugly stuff
      document.getElementById('actor'+current).classList.remove("hide-left");
    document.getElementById('actor'+current).classList.add(classname);
    current = current + 1 <= max ? current + 1 : current ;
  }
  else if (e.deltaX > 0)// go left
  {
    classname = "hide-left";
    if (document.getElementById('actor'+current).classList.contains("hide-right"))
      document.getElementById('actor'+current).classList.remove("hide-right");
    document.getElementById('actor'+current).classList.add(classname);
    current = current - 1 >= min ? current - 1 : current ;
  }
 
  //show new card  
  document.getElementById('actor'+current).classList.add('show');
  if (document.getElementById('actor'+current).classList.contains("fullscreen"))
    document.getElementById('actor'+current).classList.remove("fullscreen");
  if (document.getElementById('actor'+current).classList.contains("hide-right"))
    document.getElementById('actor'+current).classList.remove("hide-right");
  if (document.getElementById('actor'+current).classList.contains("hide-left"))
    document.getElementById('actor'+current).classList.remove("hide-left");
  console.log('actor: '+current);
}

function add_event()
{
  console.log('add_event');
  document.addEventListener("wheel", function (e)
  {
    transition(e);
    setTimeout(add_event, 700);// 700ms time of the transition
  }, {once : true});
}

document.addEventListener("click", function (e)
{
  document.getElementById('actor'+current).classList.add('fullscreen'); 
  document.getElementById('actor'+current).classList.remove('show');
});

add_event();
