$(function(){
    $("#form-total").steps({
        headerTag: "h2",
        bodyTag: "section",
        transitionEffect: "fade",
        enableAllSteps: true,
        autoFocus: true,
        transitionEffectSpeed: 500,
        titleTemplate : '<span class="title">#title#</span>',
        labels: {
            previous : 'Previous',
            next : 'Next Step',
            finish : 'Submit',
            current : ''
        },
        onFinished: function (event, currentIndex)
        {
            document.getElementById("submit").click();
            // alert('Sumited');
        }
    });
});
