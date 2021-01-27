var route;
var noteTitle;
var noteContent;
var lastSave;
var lastNoteContent = "";

window.onload = () => {
   
    route = location.pathname.replace('/', '');
    route = route.replace('.', "");
    noteTitle = document.getElementById('page-title');
    noteContent = document.getElementById('page-content');
    lastSave = document.getElementById('last-save');

    document.title = 'SaveText - ' + route;

    var request = searchNote();

    window.setInterval(function() {

        if (noteContent.value != lastNoteContent) {
            saveNote();
        }

    }, 5000);

};

function searchNote() {

    let data = { "route" : route };

    const options = {
        method: 'POST',
        mode: 'cors',
        cache: 'default',
        body: JSON.stringify(data),
        headers: new Headers({
            'Content-Type': 'application/json'
        })
    };

    fetch('api/getNote.php', options)
    .then(response => { response.json()
        .then(response => {

            if(response.status == "SUCCESS") {

                noteTitle.innerHTML = response.data.route_url;
                noteContent.value = response.data.note_content;
                lastSave.innerHTML = 'Saved at: ' + response.data.saved_at;

                lastNoteContent = response.data.note_content;
            } else {
                noteTitle.innerHTML = route;
            }
        })
    });
}

function saveNote() {

    let data = { "route" : route , "note_content" : noteContent.value };

    const options = {
        method: 'POST',
        mode: 'cors',
        cache: 'default',
        body: JSON.stringify(data),
        headers: new Headers({
            'Content-Type': 'application/json'
        })
    };

    fetch('api/saveNote.php', options)
    .then(response => { response.json()
        .then(response => {

            if(response.status == "SUCCESS") {

                lastSave.innerHTML = 'Saved at: ' + response.data.saved_at;

                lastNoteContent = response.data.note_content;
            }
        })
    });
}