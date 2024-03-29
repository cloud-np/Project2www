<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Project 2</title>
    <link rel="stylesheet" href="styles/styles.css">

</head>

<body>


    <head>
        <div id="title">
            <h2>Project 2</h2>
            <p>Τεχνολογίες WWW</p>
        </div>
        <section class="cell-clicked-container">
            <h4>Cell Clicked</h4>
            <div id="cell-clicked">name: ---<br> x: ---<br> y: ---<br>nets: -1</div>
        </section>
    </head>
    <main>
        <div id="sketch-holder">
            <!-- Our sketch will go here! -->
        </div>
        <section class="utils">

            <nav class="equal-spaces-nav">
                <div class="input-nums">
                    <label class="labels-for-input" for="input">Pick a net<br></label>
                    <!-- <form> -->
                    <input type="number" id="pick-net" placeholder=" Enter">
                    <!-- </form> -->
                    <p class="important-note" id="net-note"><strong>NOTE</strong> total nets in this design: (0)</p>
                </div>

                <label class="label-for-small-btn" for="button">Press to reset colors<br>
                    <button class="btn reset-btn small-btn" id="reset-nets-colors">RESET</button>
                </label>

                <div class="input-nums">
                    <label class="labels-for-input" for="input">Pick a line<br> </label>

                    <input type="number" id="pick-line" placeholder=" Enter">

                    <p class="important-note" id="lines-note"><strong>NOTE</strong> total lines in this design: (0)</p>
                </div>
                <label class="label-for-small-btn" for="button">Press to reset colors<br>
                    <button class="btn reset-btn small-btn" id="reset-lines-colors">RESET</button>
                </label>

                <div class="input-nums">
                    <label class="labels-for-input" for="input">Pick a node<br></label>

                    <input type="text" id="pick-node" placeholder=" Enter">

                    <p class="important-note" id="nodes-note"><strong>NOTE</strong> total nodes in this design: (0)</p>
                </div>

                <label class="label-for-small-btn" for="button">Press to reset colors<br>
                    <button class="btn reset-btn small-btn" id="reset-nodes-colors">RESET</button>
                </label>


            </nav>
        </section>
    </main>

    <footer>

        <nav class="footer-nav">
            <div id="buttons-box">
                <label id="label-for-upload">Upload here the<br> <span><strong>6 files</strong></span> needed </label>
                <label for="load-btn" id="label-for-load">Load an <span><strong>existing</strong></span> design<br></label>


                <form action="upload.php" method="post" enctype="multipart/form-data">
                    <input id="upload-input" onchange="this.form.submit()" class="btn" type="file" name="files[]" multiple></input>
                </form>

                <p class="or"><strong>OR</strong></p>
                <form action="loadDesigns.php" method="GET">
                    <button id="load-btn" type="submit" name="load-design" class="btn medium-btn">LOAD</button>
                </form>

                <label for="save-box" id="label-for-save-box">Save current design</label>
                <div id="save-box">
                    <form action="saveToDatabase.php" method="POST">
                        <button type="submit" name="save-design" class="btn save">SAVE</button>
                    </form>
                    <button class="btn screenshot" id="screenshot">SCREENSHOT</button>
                </div>
                <div id="screenshot-box">

                </div>
            </div>

            <label class="labels border-cells-label">Reveal Cells at border <br>
                <button class="btn large-btn" id="border-cells">BORDER CELLS</button>
                <div id='reveal-border-cell-info'>

                </div>
            </label>


            <label class="labels statistics-label">Reveal Statistics <br>
                <button class="btn large-btn" id="statistics">STATISTICS</button>
                <div id='reveal-statistics-info'>

                </div>
            </label>
        </nav>
    </footer>

</body>
<!-- <script src="script.js"></script> -->
<script src="scripts/p5.js"></script>
<script src="scripts/sketch.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="scripts/otherName.js"></script>
<script src="scripts/classes.js"></script>


</html>