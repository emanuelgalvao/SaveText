window.onload = () => {
   
    var goButton = document.getElementById('button-go');
    var routeURL = document.getElementById('route');

    goButton.addEventListener('click', () => {
        
        if(routeURL.value != '')
            window.location.href = '/' + routeURL.value;

    });
};