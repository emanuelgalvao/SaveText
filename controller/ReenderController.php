<?php

    class ReenderController{

        public function ReenderIndex(){ ?>

            <!DOCTYPE html>
            <html lang="pt-br">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>SaveText</title>

                <link rel="stylesheet" href="styles/index.css">

            </head>
            <body>

                <div id="logo">
                    <img id="logo-image" src="images/logo-image.png" alt="">
                    <h1 id="logo-text">SaveText.online</h1>
                </div>

                <div id="note-route">
                    <div id="root-route">
                        <span>savetext.online/</span>
                    </div>
                    <div id="route-url">
                        <input type="text" id="route" maxlength="100">
                    </div>
                    <div id="button-go">
                        GO
                    </div>
                </div>

                <div id="how-it-works">
                    <div id="hiw-title">
                        <span><strong>What is this?</strong></span>
                    </div>
                    <div id="hiw-content">
                        <span><strong>SaveText.online</strong> is a place where you can save and share your texts.</span><br><br>
                        <span>Your text can be accessed through the URL you entered in the browser.</span><br><br>
                        <span>Anyone who accesses this URL will see the information.</span><br><br>
                        <span>Thank you so much for using = D</span><br>
                    </div>
                </div>

                <div id="developer">
                    <span>Developed by <a target="_blank" href="http://emanuelgalvao.com"><strong>Emanuel Galvão</strong></a> © 2021</span>
                </div>

                <script src="scripts/index.js"></script>

            </body>
            </html>

        <?php }

        public function ReenderNote($route){ ?>

            <!DOCTYPE html>
            <html lang="pt-br">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>SaveText</title>

                <link rel="stylesheet" href="styles/note.css">

            </head>
            <body>

                <div id="navbar">
                    <a href="/">
                        <div id="logo">
                            <img id="logo-image" src="images/logo-image.png" alt="">
                        </div>
                        <div id="saved-at">
                            <h1 id="logo-text">SaveText.online</h1>
                            <span id="last-save"></span>
                        </div>
                    </a>
                </div>

                <div id="note">
                    <div id="note-title">
                        <span><strong id="page-title">Note Title</strong></span>
                    </div>
                    <div id="note-content">
                        <textarea id="page-content" spellcheck="false"></textarea>
                    </div>
                </div>

                <div id="developer">
                    <span>Developed by <a target="_blank"  href="http://emanuelgalvao.com"><strong>Emanuel Galvão</strong></a> © 2021</span>
                </div>

                <script src="scripts/note.js"></script>

            </body>
            </html>

        <?php }

    }

?>