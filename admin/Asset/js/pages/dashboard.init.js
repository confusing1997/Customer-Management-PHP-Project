!function(i){
    "use strict";
    var sh1 = document.getElementById('sh1_cus').value;
    var sh2 = document.getElementById('sh2_cus').value;
    var sh3 = document.getElementById('sh3_cus').value;
    var sh1_avg = document.getElementById('sh1_cus_avg').value;
    var sh2_avg = document.getElementById('sh2_cus_avg').value;
    var sh3_avg = document.getElementById('sh3_cus_avg').value;
    var e=function(){}
    
    e.prototype.respChart=function(e,r,a,t){
        
        var o=e.get(0).getContext("2d"),s=i(e).parent();
        
        function n(){e.attr("width",i(s).width());

        switch(r){

            case"Line":
                new Chart(o,{type:"line",data:a,options:t});
            break;
            
            case"Doughnut":
                new Chart(o,{type:"doughnut",data:a,options:t});
            break;
            
            case"Pie":
                new Chart(o,{type:"pie",data:a,options:t});
            break;
            
            case"Bar":
                new Chart(o,{type:"bar",data:a,options:t});
            break;
            
            case"Radar":
                new Chart(o,{type:"radar",data:a,options:t});
            break;
            
            case"PolarArea":
                new Chart(o,{data:a,type:"polarArea",options:t})}}i(window).resize(n),n()},
                
            e.prototype.init=function(){this.respChart(i("#transactions-chart"),
            "Line",
            {labels:["Showroom 1","Showroom 2","Showroom 3"],
            datasets:
            [{label:"Customers in System",fill:!1,backgroundColor:"#5d6dc3",borderColor:"#5d6dc3",

            data:[sh1,sh2,sh3]},

            {label:"Average Customer in a showroom",fill:!1,backgroundColor:"#3ec396",borderColor:"#3ec396",
            borderDash:[5,5],
            data:
                [sh1_avg,sh2_avg, sh3_avg]}]},{responsive:!0,
                
                tooltips:{mode:"index",intersect:!1},hover:{mode:"nearest",intersect:!0},
                
                scales:{xAxes:[{display:!0,gridLines:{color:"rgba(0,0,0,0.1)"}}],
                
                yAxes:[{gridLines:{color:"rgba(255,255,255,0.05)",fontColor:"#fff"},
                
                ticks:{max:30,min:0,stepSize:5}}]}});this.respChart(i("#sales-history"),"Bar",
                
                {labels:["January","February","March","April","May","June","July"],
                
                datasets:[{label:"Sales Analytics",backgroundColor:"#3ec396",borderColor:"#3ec396",borderWidth:1,hoverBackgroundColor:"#3ec396",hoverBorderColor:"#3ec396",
                
                data:[65,59,80,81,56,89,40,20]}]},
                
                {scales:{yAxes:[{gridLines:{color:"rgba(255,255,255,0.05)",fontColor:"#fff"},
                
                ticks:{max:100,min:20,stepSize:20}}],xAxes:[{gridLines:{color:"rgba(0,0,0,0.1)"}}]}})},
                
                i.ChartJs=new e,i.ChartJs.Constructor=e}(window.jQuery),
                
                function(e){"use strict";window.jQuery.ChartJs.init()}();