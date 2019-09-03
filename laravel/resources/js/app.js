var url = document.getElementById("img_url");

if (document.body.contains(url)) //edit - create
{
  url.onchange = function (e)
  {
    document.getElementById("img").style.backgroundImage = "url('"+url.value+"')";
  };
}
else //index
{
  var current = document.getElementsByClassName("card").length - 1;
  var max = current;
  var min = 0;

  function show(card)
  {
    card.classList.add("show");
    if (card.classList.contains("fullscreen"))
      card.classList.remove("fullscreen");
    if (card.classList.contains("hide-right"))
      card.classList.remove("hide-right");
    if (card.classList.contains("hide-left"))
      card.classList.remove("hide-left");
  }  
 
  function hide(card, direction)
  {
    let classname = "";
    
    card.classList.remove("show");

    if (direction == 'right') //go left
    {
      classname = "hide-right";
      if (card.classList.contains("hide-left")) //todo factor that ugly stuff
        card.classList.remove("hide-left");
      card.classList.add(classname);
    }
    else if (direction == 'left')// go right
    {
      classname = "hide-left";
      if (card.classList.contains("hide-right"))
        card.classList.remove("hide-right");
      card.classList.add(classname);
    }
    
  }
 
  function transition (e)
  {
    //hide old card
    var old_card = document.getElementById("card"+current);

    if (e.deltaY > 0) //go left
    {
      hide(old_card, 'right');
      current = current + 1 <= max ? current + 1 : current;
    }
    else if (e.deltaY < 0)// go right
    {
      hide(old_card, 'left');
      current = current - 1 >= min ? current - 1 : current;
    }
   
    //show new card
    var new_card = document.getElementById("card"+current);
    show(new_card);
  }
  
  function add_event()
  {
    document.addEventListener("wheel", function (e)
    {
      transition(e);
      setTimeout(add_event, 700);
    }, {once : true});
  }
  
  document.addEventListener("click", function (e)
  {
    document.getElementById("card"+current).classList.add("fullscreen"); 
    document.getElementById("card"+current).classList.remove("show");
  });
  
  add_event();
}
