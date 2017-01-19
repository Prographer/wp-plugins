function ids_ban_init(){
    var redirect_url = '/news';
    var ids_ban = document.createElement('div');
    ids_ban.className = "ids_ban";
    var close = document.createElement('div');
    close.className = "close";
    close.addEventListener('click',function(event){
        event.stopPropagation();
        ids_ban.style.display = "none";
    });
    ids_ban.addEventListener('click',function(){
        location.href=redirect_url
    });
    ids_ban.appendChild(close);
    document.body.appendChild(ids_ban);

    var bounce = new Bounce();
    bounce.translate({
        from: { x: 0, y: 0 },
        to: { x: 0, y: 30 },
        duration: 1000,
        stiffness: 2,
        easing:'sway'
    }).applyTo(document.querySelectorAll(".ids_ban"),{loop:true});
}
ids_ban_init();
