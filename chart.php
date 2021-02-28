<?php
  include( 'chartlogix.inc.php' );

  $bar = new BarChart();

  //---- THE STYLE

  $bar->setBackground( 'EEEEEE', 'EEEEEE' );
  $bar->setPadding( 20 );

  $bar->setDefaultFont( 'arial.ttf' );
  $bar->setTitleStyle( 'arial.ttf', 15, '000000' );
  $bar->setTitlePosition( 0, 0 );

  $bar->setLegendWidth( 40.00 );
  $bar->setLegendTextStyle( 'arial.ttf', 10, '000000', 10 );
  $bar->setLegendKeyStyle( 10, 10 );
  $bar->setLegendBoxStyle( 'FFFFFF', '000000', 10 );
  $bar->setLegendPosition( 1, 0 );

  $bar->setXAxisTextStyle( 'arial.ttf', 10, '000000', 0 );
  $bar->setYAxisTextStyle( 'arial.ttf', 10, '000000' );
  $bar->setColumnSpacing( 25 );
  $bar->setStackedBarSpacing( 0 );

  //---- THE DATA

  $bar->setTitle( 'ChartLogix Bar & Line Graph' );

  $bar->addColumns( array( '2002', '2003', '2004', '2005', '2006', '2007' ) );

  $bar->doBarSeries( 'Bananas', 'FFFF00', 'FFCC00' );

  $bar->setValueStyle();

  $bar->addData( '2002', 1498 );
  $bar->addData( '2003', 358 );
  $bar->addData( '2004', 675 );
  $bar->addData( '2005', 1449 );
  $bar->addData( '2006', 1335 );
  $bar->addData( '2007', 137 );

  //---- DRAW PNG

  $bar->drawPNG( 500, 400 );
?>