// Código para gerar os dados da moeda e exibir o gráfico
// Por Pedro Pereira & Juliano Garcia, IME-USP
/*Control variables:
 * updateInterval (miliseconds to update the data)
 * dataLength (initial number of tries displayed in the graph)
 */
 // Auxiliar functions to convert colors
 function rgbToHex(R,G,B) {return toHex(R)+toHex(G)+toHex(B)}

 // Convert number to a RGB value (between 0 and 255)
 function toHex(n) {
  //Separate the number in two digits
  n = parseInt(n,10);
  if (isNaN(n)) return "00";
  n = Math.max(0,Math.min(n,255));
  //Using mod to get the right character in the position
  return "0123456789ABCDEF".charAt((n-n%16)/16)
       + "0123456789ABCDEF".charAt(n%16);
 }

window.onload = function () {
    var flag = false;
    $( "#redS" ).slider({
        orientation: "horizontal",
        max : 200,
        min : 1,
        value:30,
        range: "min",
        start: stopGraph,
        stop: addDataPointsAndRender,
        slide: refreshBkg,
        change: refreshBkg

    });
  function addDataPointsAndRender() {
      nHTML =  Number(document.getElementById("numberX").value);
      dataLength = Number(document.getElementById("numberL").value);
      if(isNaN(nHTML) || isNaN(dataLength)) {
        alert("ERROR: You must provide an Integer number!")
        return;
    }
      if(!nHTML)
        nHTML = 1000;
      if(!dataLength)
        dataLength = 10; // number of dataPoints visible at any point
      // Data points matrix :
      // dtp[0]=side 1, dtp[1]=side 2, dtp[2]=side 3, dtp[3]=side 4, dtp[4]=side 5, dtp[5]=side 6
      var dtp =[[], [], [], [], [], []]
      var realProb = []
      // Data frequency matrix
      var dFreqs = [[0], [0], [0], [0], [0], [0]]
      var chart = new CanvasJS.Chart("chartContainer",{
          title :{
              text: ""
          },
          axisY: {
              maximum: 1
          },
          axisX: {
            minimum: 1,
          },
          data: [{
              type: "line",
              dataPoints: dtp[0],
              color: "green",
          },
          {
              type: "line",
              dataPoints: dtp[1],
              color: "red",
          },
          {
            type: "line",
            color: "black",
            markerType: "none",
            legendText: "Real probability (1/2)",
            name: "Real Probability",
            showInLegend: true,
            dataPoints: realProb,
          }
      ]
      });
      var xVal = 1;
      //Time interval
      var updateInterval = 201 - $( "#redS" ).slider("value");

      var updateChart = function (count) {
        if (xVal > nHTML)
          clearInterval(graphInterval);

          count = count || 1;
          // count is number of times loop runs to generate random dataPoints.
          for (var j = 0; j < count; j++) {
              var rnd = Math.ceil(Math.random() * 2);
              dFreqs[rnd-1] ++;
              for(var i = 0; i < 2; i++) {
                  dtp[i].push({
                      x: xVal,
                      y: dFreqs[i]/xVal
                  });

              }
              realProb.push({
                x: xVal,
                y: 1.0/2, //Parsing to float
              });
              xVal++;
          };
          chart.render();
      };

      // generates first set of dataPoints
      updateChart(dataLength);

      // update chart after specified time.
      graphInterval = setInterval(function(){updateChart()}, updateInterval);
  }

    addDataPointsAndRender();
    // Refresh the background-color of the slider
    function refreshBkg() {
      var color = $( "#redS" ).slider("value");
      /* -> color slider transition!*/
      if(color<100)
        hex = rgbToHex(0,Math.ceil(6.375*color-382.5),Math.ceil(-2.55*color+255));
      else
        hex = rgbToHex(Math.ceil(2.55*color-255), Math.ceil(-5.375*color+892,5),0);

      $( "#redS .ui-slider-range" ).css( "background-color", "#" + hex );
    }
    // Start or Stop the graph, and set the correct text in the button
    function startOrStop() {
        var bText = flag ? 'Stop' : 'Restart';
        if (flag)
            addDataPointsAndRender();
        else
            stopGraph();
        $("#startStopButton").html(bText);
        flag = !flag;
    }
    // If key is "Enter", then executes the code
    function proccessInput(key) {
        if(key.keyCode == 13){
            stopGraph();
            addDataPointsAndRender();
        }
    }

    // Add listeners and callback process
    var renderButton = document.getElementById("renderButton");
    var dLengthButton = document.getElementById("dLengthButton");
    var maxNButton = document.getElementById("numberX");
    var startNButton = document.getElementById("numberL");
    var sliderHolder = document.getElementById("slider");
    var startStopButton =  document.getElementById("startStopButton");
    renderButton.addEventListener("click", addDataPointsAndRender);
    dLengthButton.addEventListener("click", addDataPointsAndRender);
    startNButton.addEventListener("keydown",proccessInput);
    maxNButton.addEventListener("keydown",proccessInput);
    startStopButton.addEventListener("click", startOrStop);


}
function stopGraph() {
    clearInterval(graphInterval);
}
