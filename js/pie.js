// JavaScript Document

	var humanoid = $(".Humanoid").length;
	var dragonkin = $(".Dragonkin").length;
	var flying = $(".Flying").length;
	var undead = $(".Undead").length;
	var critter = $(".Critter").length;
	var magic = $(".Magic").length;
	var elemental = $(".Elemental").length;
	var beast = $(".Beast").length;
	var aquatic = $(".Aquatic").length;
	var mechanical = $(".Mechanical").length;
	var nonCombat = $(".noncombat").length;
	var total = humanoid+dragonkin+flying+undead+critter+magic+elemental+beast+aquatic+mechanical+nonCombat;

//    Load the AJAX API

    // Load the Visualization API and the piechart package.
      google.load('visualization', '1.0', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Family');
        data.addColumn('number', 'Slices');
        data.addRows([
          ['Humanoid', humanoid],
          ['Dragonkin', dragonkin],
          ['Flying', flying],
          ['Undead', undead],
          ['Critter', critter],
          ['Magic', magic],
          ['Elemental', elemental],
          ['Beast', beast],
          ['Aquatic', aquatic],
          ['Mechanical', mechanical],
		  ['Non-Combat', nonCombat]
        ]);

        // Set chart options
        var options = {'title':total+' Total Pets',
                       'width':400,
                       'height':300};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('pie_chart_div'));
        chart.draw(data, options);
      }
