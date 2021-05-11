<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Captcha</title>
    <link rel="stylesheet" href="css/captcha.css">
</head>

<body>

    <div class="container">
        <div class="captcha">

            <div id="grabzone">
                <h1>Grab Items here !</h1>
                <div class="grabbable" id="g1" ondragstart="OnDragStart(event)" draggable='true'>Grab Me 1</div>
                <div class="grabbable" id="g2" ondragstart="OnDragStart(event)" draggable='true'>Grab Me 2</div>
                <div class="grabbable" id="g3" ondragstart="OnDragStart(event)" draggable='true'>Grab Me 3</div>
                <div class="grabbable" id="g4" ondragstart="OnDragStart(event)" draggable='true'>Grab Me 4</div>
                <div class="grabbable" id="g5" ondragstart="OnDragStart(event)" draggable='true'>Grab Me 5</div>
                <div class="grabbable" id="g6" ondragstart="OnDragStart(event)" draggable='true'>Grab Me 6</div>
                <div class="grabbable" id="g7" ondragstart="OnDragStart(event)" draggable='true'>Grab Me 7</div>
                <div class="grabbable" id="g8" ondragstart="OnDragStart(event)" draggable='true'>Grab Me 8</div>
                <div class="grabbable" id="g9" ondragstart="OnDragStart(event)" draggable='true'>Grab Me 9</div>
            </div>


            <div id="dropzone" ondragover="OnDragOver(event)" ondrop="OnDrop(event)">
                <h1>Drop Items here !</h1>

                <div class="droppable" id="d1">Drop Here 1</div>
                <div class="droppable" id="d2">Drop Here 2</div>
                <div class="droppable" id="d3">Drop Here 3</div>
                <div class="droppable" id="d4">Drop Here 4</div>
                <div class="droppable" id="d5">Drop Here 5</div>
                <div class="droppable" id="d6">Drop Here 6</div>
                <div class="droppable" id="d7">Drop Here 7</div>
                <div class="droppable" id="d8">Drop Here 8</div>
                <div class="droppable" id="d9">Drop Here 9</div>

            </div>

        </div>
    </div>

    <script src="scripts/captcha.js"></script>
</body>

</html>