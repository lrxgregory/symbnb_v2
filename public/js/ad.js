$('#add-images'). click(function(){
    //Je récupère le numéro des futurs champs que je vais créer (le + permet de récupérer des nombres)
    const index = +$('#widgets-counter').val();

    console.log(index);

    //Je récupère le prototype des entrées
    const tmpl = $('#ad_images').data('prototype').replace(/__name__/g, index);

    //J'injecte ce code au sein de la div
    $('#ad_images').append(tmpl);

    $('#widgets-counter').val(index + 1);

    //Je gère le bouton supprimer
    handleDeleteButtons();
}); 

function handleDeleteButtons(){
    //Quand je click sur un bouton qui a une data action delete
    $('button[data-action="delete"]').click(function(){
        //dataset représente tous les attributs data-xxx
        const target = this.dataset.target;
        $(target).remove();
    });
}

function updateCounter(){
    const count = +$('#ad_images div.form-group').length;

    $('#widgets-counter').val(count);
}

updateCounter();
handleDeleteButtons();
