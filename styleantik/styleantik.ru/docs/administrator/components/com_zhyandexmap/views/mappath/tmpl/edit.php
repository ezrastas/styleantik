<?php
/*------------------------------------------------------------------------
# com_zhyandexmap - Zh YandexMap
# ------------------------------------------------------------------------
# author:    Dmitry Zhuk
# copyright: Copyright (C) 2011 zhuk.cc. All Rights Reserved.
# license:   http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
# website:   http://zhuk.cc
# Technical Support Forum: http://forum.zhuk.cc/
-------------------------------------------------------------------------*/
// No direct access
defined('_JEXEC') or die('Restricted access');
JHtml::_('behavior.tooltip');
JHtml::_('behavior.formvalidation');

?>
<form action="<?php echo JRoute::_('index.php?option=com_zhyandexmap&layout=edit&id='.(int) $this->item->id); ?>" method="post" name="adminForm" id="adminForm" class="form-validate">

<div class="span12 form-horizontal">

<div class="tabbable">
    <ul class="nav nav-pills">
		<li class="active"><a href="#tab1" data-toggle="tab"><?php echo JText::_( 'COM_ZHYANDEXMAP_MAPPATH_DETAIL' ); ?></a></li>
		<li><a href="#tab2" data-toggle="tab"><?php echo JText::_('COM_ZHYANDEXMAP_MAPPATH_PATHADVANCED'); ?></a></li>
		<?php
		$fieldSets = $this->form->getFieldsets('params');
		foreach ($fieldSets as $name => $fieldSet) :
		?>
		<li><a href="#params-<?php echo $name;?>" data-toggle="tab"><?php echo JText::_($fieldSet->label);?></a></li>
		<?php endforeach; ?>
    </ul>
</div>
<div class="tab-content">
	<div class="tab-pane active" id="tab1">
		<fieldset class="adminform">
			
				<?php foreach($this->form->getFieldset('details') as $field): ?>
				<div class="control-group">
					<?php 
							if ($field->id == 'jform_mapid')
						{
							?>
							<div class="control-label">
							<?php 
								echo $field->label;
							?>
							</div>
							<div class="controls">
							<?php 
								array_unshift($this->mapList, JHTML::_('select.option', '', JText::_( 'COM_ZHYANDEXMAP_MAPPATH_FILTER_MAP'), 'value', 'text')); 
								echo JHTML::_( 'select.genericlist', $this->mapList, 'jform[mapid]',  'class="inputbox required" size="1"', 'value', 'text', (int)$this->item->mapid, 'jform_mapid');
								//echo $field->label;
								//echo $field->input;
							?>
							</div>
							<?php 
						}
						else if ($field->id == 'jform_descriptionhtml')
						{
							?>
							<div class="control-label">
							<?php 
								echo '<div class="clr"></div>';
								echo $field->label;
							?>
							</div>
							<div class="controls">
							<?php 
								echo '<div class="clr"></div>';
								echo $field->input;
							?>
							</div>
							<?php 
						}
						else
						{
							?>
							<div class="control-label">
							<?php 
								echo $field->label;
							?>
							</div>
							<div class="controls">
							<?php 
								echo $field->input;
							?>
							</div>
							<?php 
						}
						?>
				</div>
				<?php endforeach; ?>

			
		</fieldset>
	</div>
	<div class="tab-pane" id="tab2">
		
		<fieldset class="adminform">
			
				<?php foreach($this->form->getFieldset('pathadvanced') as $field): ?>
				<div class="control-group">
					<?php 
						?>
						<div class="control-label">
						<?php 
							echo $field->label;
						?>
						</div>
						<div class="controls">
						<?php 
							echo $field->input;
						?>
						</div>
						<?php 
					?>
				</div>
				<?php endforeach; ?>
			
		</fieldset>
	</div>

	<?php echo $this->loadTemplate('params'); ?>

</div>

<div id="YMapsID" class="row-fluid" style="margin:0;padding:0;width:100%;height:450px">
<div id="YMapsCredit" class="zhym-credit"></div>

<?php 

$apikey = $this->mapapikey;

$mapDefLat = $this->mapDefLat;
$mapDefLng = $this->mapDefLng;
$componentApiVersion = $this->mapAPIVersion;

$urlProtocol = "http";
if ($this->maphttpsprotocol != "")
{
	if ((int)$this->maphttpsprotocol == 1)
	{
		$urlProtocol = 'https';
	}
}

$document	= JFactory::getDocument();

$scripttext = "";
$credits ="";

if ($componentApiVersion == "")
{
	$componentApiVersion = '2.x';
}


switch ($componentApiVersion)
{
    case "2.0.x": 
        $mapVersion = "2.0"; 
        break;
    case "2.1.x": 
        $mapVersion = "2.1"; 
        break;			    
    case "2.x": 
        $mapVersion = "2.1"; 
        break;
    default:
        $mapVersion = "2.1"; 
        break;   
}
        
if ($mapVersion == "2.0"||
    $mapVersion == "2.1")
{
    
	$loadmodules = '';

	$mapMapTypeYandex = $this->mapMapTypeYandex;
	$mapMapTypeOSM = $this->mapMapTypeOSM;
	$mapMapTypeCustom = $this->mapMapTypeCustom;
	
	$scriptlink	= $urlProtocol.'://api-maps.yandex.ru/'.$mapVersion.'/?coordorder=longlat&amp;load=package.full&amp;lang=ru-RU';

	$scripttext .= '<script type="text/javascript" >//<![CDATA[' ."\n";

	$scripttext .= 'ymaps.ready(initialize);' ."\n";

	$scripttext .= 'function initialize () {' ."\n";

	$scripttext .= '    p_zoom = 14;' ."\n";

        // Begin initialize function
	if ($mapDefLat != "" && $mapDefLng !="")
	{
		$scripttext .= 'spblocation = ['.$mapDefLng.', '.$mapDefLat.'];' ."\n";
		$do_default = 1;
	}
	else
	{
		$scripttext .= 'spblocation = [30.3158, 59.9388];' ."\n";
		$do_default = 0;
	}
		
	$scripttext .= '    map = new ymaps.Map("YMapsID", {' ."\n";
	$scripttext .= '    center: spblocation' ."\n";
	$scripttext .= '   ,zoom: p_zoom'."\n";
	if ($mapVersion == "2.1")
	{
	    $scripttext .= '   ,controls: [\'geolocationControl\']'."\n";
	}   
	$scripttext .= '    });' ."\n";
        
	if ((int)$this->item->id == 0)		
	{
		if ($do_default == 1)
		{
                    $scripttext .= '    p_center = spblocation;' ."\n";
		}
		else
		{
                    if ($mapVersion == "2.0")
                    {
                        $scripttext .= 'if (ymaps.geolocation) ' ."\n";
			$scripttext .= '{' ."\n";
			//$scripttext .= 'alert("Find");';
                        $scripttext .= '    p_center = [ymaps.geolocation.longitude, ymaps.geolocation.latitude];' ."\n";
                        $scripttext .= '    map.setCenter(p_center);' ."\n";
                        $scripttext .= '}' ."\n";
			$scripttext .= 'else' ."\n";
			$scripttext .= '{' ."\n";
			//$scripttext .= 'alert("SpbLocation");';
			$scripttext .= '    p_center = spblocation;' ."\n";
			$scripttext .= '}' ."\n";                        
                    }
                    else
                    {
			// to fix initial (async)
			$scripttext .= '    p_center = spblocation;' ."\n";

			$scripttext .= '        ymaps.geolocation.get({' ."\n";
                        $scripttext .= '            provider: \'yandex\',' ."\n";
                        $scripttext .= '            mapStateAutoApply: false' ."\n";
                        $scripttext .= '        }).then(function (res) ' ."\n";
			$scripttext .= '        {' ."\n";
                        $scripttext .= '          var mypos = res.geoObjects.get(0);' ."\n";   
                        $scripttext .= '          p_center = mypos.geometry.getCoordinates();' ."\n";
			//$scripttext .= 'alert("Change position");';
                        $scripttext .= '          map.setCenter(p_center);' ."\n";

                        $scripttext .= '        });' ."\n";                          
                    }

		}
	}
	else
	{
		$scripttext .= '    p_center = spblocation;' ."\n";
	}


	$scripttext .= 'map.behaviors.enable(\'dblClickZoom\');' ."\n";

	if ((int)$mapMapTypeOSM != 0)
	{
		$scripttext .= 'osmMapType = function () { return new ymaps.Layer(' ."\n";
		$scripttext .= '\'http://tile.openstreetmap.org/%z/%x/%y.png\', {' ."\n";
		$scripttext .= '	projection: ymaps.projection.sphericalMercator' ."\n";
		$scripttext .= '});' ."\n";
		$scripttext .= '};' ."\n";

		$scripttext .= 'ymaps.mapType.storage.add(\'osmMapType\', new ymaps.MapType(' ."\n";
		$scripttext .= '	\'OSM\',' ."\n";
		$scripttext .= '	[\'osmMapType\']' ."\n";
		$scripttext .= '));' ."\n";

		$scripttext .= 'ymaps.layer.storage.add(\'osmMapType\', osmMapType);' ."\n";

		if ($credits != '')
		{
			$credits .= '<br />';
		}
		$credits .= 'OSM '.JText::_('COM_ZHYANDEXMAP_MAP_POWEREDBY').': ';
		$credits .= '<a href="http://www.openstreetmap.org/" target="_blank">OpenStreetMap</a>';
		
	}
	
	// Add Custom MapTypes - Begin
	if ((int)$mapMapTypeCustom != 0)
	{
		foreach ($this->mapMapTypeList as $key => $currentmaptype) 
		{
			$scripttext .= 'customMapLayer'.$currentmaptype->id.' = new ymaps.Layer(' ."\n";
			$scripttext .= '\'\', {' ."\n";

			switch ($currentmaptype->projection)
			{
				case 0:
					$scripttext .= '  projection: ymaps.projection.sphericalMercator' ."\n";
				break;
				case 1:
					$scripttext .= '  projection: ymaps.projection.wgs84Mercator' ."\n";
				break;
				case 2:
					$scripttext .= '  projection: ymaps.projection.Cartesian' ."\n";
				break;
				default:
					$scripttext .= '  projection: ymaps.projection.sphericalMercator' ."\n";
				break;
			}
			if ($currentmaptype->opacity != "")
			{
				$scripttext .= ', brightness: '.$currentmaptype->opacity ."\n";
			}

			$scripttext .= ', tileSize: ['.$currentmaptype->tilewidth.','.$currentmaptype->tileheight.']'."\n";

			if ((int)$currentmaptype->transparent == 0)
			{
				$scripttext .= ', tileTransparent: false' ."\n";
			}
			else
			{
				$scripttext .= ', tileTransparent: true' ."\n";
			}
			
			$scripttext .= '});' ."\n";
			
			$scripttext .= 'customMapLayer'.$currentmaptype->id.'.getTileUrl = '.$currentmaptype->gettileurl ."\n";

			$scripttext .= 'customMapType'.$currentmaptype->id.' = function () { return customMapLayer'.$currentmaptype->id.';';
			$scripttext .= '};' ."\n";
			
			$scripttext .= 'ymaps.mapType.storage.add(\'customMapType'.$currentmaptype->id.'\', new ymaps.MapType(' ."\n";
			$scripttext .= '	\''.str_replace('\'','\\\'', $currentmaptype->title).'\',' ."\n";
			$scripttext .= '	[\'customMapType'.$currentmaptype->id.'\']' ."\n";
			$scripttext .= '));' ."\n";

			$scripttext .= 'ymaps.layer.storage.add(\'customMapType'.$currentmaptype->id.'\', customMapType'.$currentmaptype->id.');' ."\n";
			// End loop by Enabled CustomMapTypes
			
		}
		// End loop by All CustomMapTypes
		
	}
		
	if ((isset($mapMapTypeYandex) && (int)$mapMapTypeYandex == 1) 
	  || (isset($mapMapTypeOSM) && (int)$mapMapTypeOSM != 0) 
	  || (isset($mapMapTypeCustom) && (int)$mapMapTypeCustom != 0) )
	{
		$ctrlPositionFullText ="";

		$ctrlMapType = "";
		
		if (isset($mapMapTypeYandex) && (int)$mapMapTypeYandex == 1) 
		{
			if ($ctrlMapType == "")
			{
				$ctrlMapType .= '"yandex#map", "yandex#satellite", "yandex#hybrid"';
			}
			else
			{
				$ctrlMapType .= ', "yandex#map", "yandex#satellite", "yandex#hybrid"';
			}
		}
		if (isset($mapMapTypeYandex) && (int)$mapMapTypeYandex == 1) 
		{
			if ($ctrlMapType == "")
			{
				$ctrlMapType .= '"yandex#publicMap", "yandex#publicMapHybrid"';
			}
			else
			{
				$ctrlMapType .= ', "yandex#publicMap", "yandex#publicMapHybrid"';
			}
		}

		if ((int)$mapMapTypeOSM != 0)
		{
			if ($ctrlMapType == "")
			{
				$ctrlMapType .= '"osmMapType"' ."\n";
			}
			else
			{
				$ctrlMapType .= ', "osmMapType"' ."\n";
			}
		}
		
		// Add Custom MapTypes - Begin
		if ((int)$mapMapTypeCustom != 0)
		{
			foreach ($this->mapMapTypeList as $key => $currentmaptype) 
			{
				if ($ctrlMapType == "")
				{
					$ctrlMapType .= '"customMapType'.$currentmaptype->id.'"' ."\n";
				}
				else
				{
					$ctrlMapType .= ', "customMapType'.$currentmaptype->id.'"' ."\n";
				}
				// End loop by Enabled CustomMapTypes
				
			}
			// End loop by All CustomMapTypes
			
		}
								
		$scripttext .= 'map.controls.add(new ymaps.control.TypeSelector(['.$ctrlMapType.'])'.$ctrlPositionFullText.');' ."\n";
	}

	
    if ((int)$mapMapTypeOSM != 0)
	{
		if (((int)$mapMapTypeOSM == 2)
		 || ((int)$mapMapTypeYandex == 0
	        || (int)$mapMapTypeCustom == 0))
		{
			$scripttext .= 'map.setType("osmMapType");' ."\n";
		}
	}

    if ((int)$mapMapTypeCustom != 0)
	{
		// Custom Map Type - part 2 (bind) - begin
		foreach ($this->mapMapTypeList as $key => $currentmaptype) 	
		{
			if (((int)$mapMapTypeCustom == 2)
				|| ((int)$mapMapTypeYandex == 0
					|| (int)$mapMapTypeOSM == 0))
			{
				$scripttext .= ' map.setType(\'customMapType'.$currentmaptype->id.'\');' ."\n";
			}
		}
		// Custom Map Type - part 2 (bind) - end
	}
	
	
	if ($mapVersion == "2.0")
	{        
            $scripttext .= 'map.controls.add(new ymaps.control.MapTools());' ."\n";
        }
	$scripttext .= 'map.controls.add(new ymaps.control.SearchControl());' ."\n";
	$scripttext .= 'map.controls.add(new ymaps.control.ZoomControl());' ."\n";

	$scripttext .= 'var placemark = new ymaps.Placemark(p_center);'."\n";
	$scripttext .= 'placemark.options.set("hasBalloon", false);'."\n";;
	$scripttext .= 'placemark.options.set("draggable", true);'."\n";;

	$scripttext .= 'map.geoObjects.add(placemark);' ."\n";

	$scripttext .= 'placemark.events.add("drag", function (e) {' ."\n";
	$scripttext .= '    var current = placemark.geometry.getCoordinates();' ."\n";
	$scripttext .= '    document.forms.adminForm.jform_helpitem.value = current[0]+","+current[1];' ."\n";
	$scripttext .= '});' ."\n";
	
	$scripttext .= 'map.events.add("click", function (e) {' ."\n";
	if ($mapVersion == "2.0")
	{         
            $scripttext .= '    var current = e.get(\'coordPosition\');' ."\n";
        }
        else
        {
            $scripttext .= '    var current = e.get(\'coords\');' ."\n";
        }
	$scripttext .= '    placemark.geometry.setCoordinates(current);' ."\n";
	$scripttext .= '    document.forms.adminForm.jform_helpitem.value = current[0]+","+current[1];' ."\n";
	$scripttext .= '});' ."\n";


	if ((int)$this->item->id == 0
	 || $this->item->path == "")
	{
		// Enable Drawing mode
			
			$scripttext .= ' var polyline = new ymaps.Polyline([map.getCenter()], {}, {	draggable: true});'."\n";	

            $scripttext .= ' map.geoObjects.add(polyline);'."\n";	

            $scripttext .= ' polyline.editor.startEditing();'."\n";	

            $scripttext .= ' polyline.editor.startDrawing();'."\n";	
				
			$scripttext .= ' polyline.events.add(\'geometrychange\', function (event) {'."\n";
			$scripttext .= '      document.forms.adminForm.jform_path.value = polyline.geometry.getCoordinates().join(";");' ."\n";
			$scripttext .= ' });'."\n";				
				
				
	}
	else
	{
	   if ((int)$this->item->id != 0)
	   {
			if ($this->item->path != "")
			{
				$scripttext .= 'var plProperties'.$this->item->id.' = {'."\n";
				$scripttext .= ' hintContent: "'.htmlspecialchars(str_replace('\\', '/', $this->item->title), ENT_QUOTES, 'UTF-8').'"' ."\n";			
				$scripttext .= '};'."\n";
			
				$scripttext .= ' var plOptions'.$this->item->id.' = {'."\n";
				$scripttext .= ' strokeColor: \''.$this->item->color.'\''."\n";
				if ($this->item->opacity != "")
				{
					$scripttext .= ', strokeOpacity: \''.$this->item->opacity.'\''."\n";
				}
				$scripttext .= ', strokeWidth: \''.$this->item->width.'\''."\n";

				if ((int)$this->item->objecttype == 1
				 || (int)$this->item->objecttype == 2)
				{
					if ($this->item->fillcolor != "")
					{
						$scripttext .= ', fillColor: \''.$this->item->fillcolor.'\''."\n";
					}
					if ($this->item->fillopacity != "")
					{
						$scripttext .= ', fillOpacity: \''.$this->item->fillopacity.'\''."\n";
					}
				}

				if ((int)$this->item->objecttype == 0
				 || (int)$this->item->objecttype == 1)
				{
					$scripttext .= ', draggable: true'."\n";
				}
				
				
				if ((int)$this->item->geodesic == 1)
				{
					$scripttext .= ', geodesic: true '."\n";
				}
				else
				{
					$scripttext .= ', geodesic: false '."\n";
				}
				$scripttext .= ' };'."\n";


				if ((int)$this->item->objecttype == 0)
				{
				
					$scripttext .= ' var plGeometry'.$this->item->id.' = ['."\n";
					$scripttext .= '['.str_replace(";","],[", $this->item->path).']'."\n";
					$scripttext .= ' ];'."\n";
					
					$curpathname = 'pl'.$this->item->id;
					
					$scripttext .= ' var '.$curpathname.' = new ymaps.Polyline(plGeometry'.$this->item->id.', plProperties'.$this->item->id.', plOptions'.$this->item->id.');'."\n";

					$scripttext .= 'map.geoObjects.add('.$curpathname.');'."\n";
					$scripttext .= $curpathname.'.editor.startEditing();'."\n";

                    $scripttext .= $curpathname.'.events.add(\'geometrychange\', function (event) {'."\n";
					$scripttext .= '      document.forms.adminForm.jform_path.value = '.$curpathname.'.geometry.getCoordinates().join(";");' ."\n";
                    $scripttext .= ' });'."\n";				
				}
				else if ((int)$this->item->objecttype == 1)
				{
					$scripttext .= ' var plGeometry'.$this->item->id.' = ['."\n";
					$scripttext .= '[['.str_replace(";","],[", $this->item->path).']]'."\n";
					$scripttext .= ' ,[]];'."\n";
					
					$curpathname = 'pl'.$this->item->id;
					$scripttext .= ' var '.$curpathname.' = new ymaps.Polygon(plGeometry'.$this->item->id.', plProperties'.$this->item->id.', plOptions'.$this->item->id.');'."\n";

					$scripttext .= 'map.geoObjects.add('.$curpathname.');'."\n";
					$scripttext .= $curpathname.'.editor.startEditing();'."\n";

                    $scripttext .= $curpathname.'.events.add(\'geometrychange\', function (event) {'."\n";
					$scripttext .= '      document.forms.adminForm.jform_path.value = '.$curpathname.'.geometry.getCoordinates()[0].join(";");' ."\n";
                    $scripttext .= ' });'."\n";				
				}
				else if ((int)$this->item->objecttype == 2)
				{
					if ($this->item->radius != "")
					{
						$arrayPathCoords = explode(';', $this->item->path);
						$arrayPathIndex = 0;
						foreach ($arrayPathCoords as $this->itemcoordinates) 
						{
							$arrayPathIndex += 1;
							$scripttext .= ' var plGeometry'.$this->item->id.'_'.$arrayPathIndex.' = ['."\n";
							$scripttext .= '['.$this->itemcoordinates.']'."\n";
							$scripttext .= ', '.$this->item->radius."\n";
							$scripttext .= ' ];'."\n";
							
							$curpathname = 'pl'.$this->item->id.'_'.$arrayPathIndex;
							$scripttext .= ' var '.$curpathname.' = new ymaps.Circle(plGeometry'.$this->item->id.'_'.$arrayPathIndex.', plProperties'.$this->item->id.', plOptions'.$this->item->id.');'."\n";

							$scripttext .= 'map.geoObjects.add('.$curpathname.');'."\n";
						}
					}
				}
				
				
			$arrayPC = explode(';', $this->item->path);
			$coordsPCxy = 0;
			foreach ($arrayPC as $currentpathcoordinates) 
			{	
				$coordsPC = explode(',', $currentpathcoordinates);
				if ($coordsPCxy == 0)
				{
					$coordsPCxMin = $coordsPC[0];
					$coordsPCxMax = $coordsPC[0];
					$coordsPCyMin = $coordsPC[1];
					$coordsPCyMax = $coordsPC[1];
					$coordsPCxy = 1;
				}
				else
				{
					if (isset($coordsPC[0]) && isset($coordsPC[1]))
					{
						if ($coordsPC[0] < $coordsPCxMin)
						{
							$coordsPCxMin = $coordsPC[0];
						}
						if ($coordsPC[1] < $coordsPCyMin)
						{
							$coordsPCyMin = $coordsPC[1];
						}
						if ($coordsPC[0] > $coordsPCxMax)
						{
							$coordsPCxMax = $coordsPC[0];
						}
						if ($coordsPC[1] > $coordsPCyMax)
						{
							$coordsPCyMax = $coordsPC[1];
						}
					}
				}
				
			}

			if ($coordsPCxy == 1)
			{
				if (count($arrayPC) > 1)
				{
					$scripttext .= 'var mapBounds = [' ."\n";
					$scripttext .= '  ['.$coordsPCxMin.', '.$coordsPCyMin.'],' ."\n";
					$scripttext .= '  ['.$coordsPCxMax.', '.$coordsPCyMax.']];' ."\n";
					$scripttext .=' map.setBounds(mapBounds);'."\n";
				}
				else
				{
					$scripttext .=' map.setCenter(['.$coordsPCxMin.', '.$coordsPCyMin.']);'."\n";
				}
			}
				
				
			}
	   }
	}
	
	if ($credits != '')
	{
		$scripttext .= '  document.getElementById("YMapsCredit").innerHTML = \''.$credits.'\';'."\n";
	}
	
	$scripttext .= '};' ."\n";
		
	$scripttext .= '//]]></script>' ."\n";
	// Script end

	$document->addScript($scriptlink . $loadmodules);
		
}
else
{
	$mapVersion = "1.1";
	$loadmodules = '';
	
	$scriptlink	= $urlProtocol.'://api-maps.yandex.ru/'.$mapVersion.'/index.xml?key='. $apikey ;

	//Script begin
	$scripttext .= '<script type="text/javascript" >//<![CDATA[' ."\n";

		$scripttext .= 'var map, geoResult;' ."\n";

		$scripttext .= 'YMaps.jQuery(function () {' ."\n";
			
		$scripttext .= '    map = new YMaps.Map(document.getElementById("YMapsID"));' ."\n";
			
		$scripttext .= 'map.enableDblClickZoom();' ."\n";
		$scripttext .= 'map.addControl(new YMaps.Zoom());' ."\n";
		$scripttext .= 'map.setType(YMaps.MapType.MAP);' ."\n";

		$scripttext .= 'map.addControl(new YMaps.ToolBar());' ."\n";
		$scripttext .= 'map.addControl(new YMaps.SearchControl());' ."\n";
		$scripttext .= 'map.addControl(new YMaps.TypeControl());' ."\n";

		if ($mapDefLat != "" && $mapDefLng !="")
		{
			$scripttext .= 'spblocation = new YMaps.GeoPoint('.$mapDefLng.', '.$mapDefLat.');' ."\n";
			$do_default = 1;
		}
		else
		{
			$scripttext .= 'spblocation = new YMaps.GeoPoint(30.3158, 59.9388);' ."\n";
			$do_default = 0;
		}
		
		if (isset($this->item->latitude) && isset($this->item->longitude) )
		{
				$scripttext .= '    p_center = new YMaps.GeoPoint('.$this->item->longitude.','.$this->item->latitude.');' ."\n";
				$scripttext .= '    p_zoom = 14;' ."\n";
		}
		else
		{
			if ($do_default == 1)
			{
				$scripttext .= '    p_center = spblocation;' ."\n";
				$scripttext .= '    p_zoom = 14;' ."\n";
			}
			else
			{
				$scripttext .= 'if (YMaps.location) {' ."\n";
				$scripttext .= '    p_center = new YMaps.GeoPoint(YMaps.location.longitude, YMaps.location.latitude);' ."\n";
				//$scripttext .= 'alert("Find");';
				$scripttext .= '    if (YMaps.location.zoom) {' ."\n";
				$scripttext .= '        p_zoom = YMaps.location.zoom;' ."\n";
				$scripttext .= '    	p_zoom = 14;' ."\n";
				$scripttext .= '    }' ."\n";
				$scripttext .= '}else {' ."\n";
				//$scripttext .= 'alert("SpbLocation");';
				$scripttext .= '    p_center = spblocation;' ."\n";
				$scripttext .= '    p_zoom = 14;' ."\n";
				$scripttext .= '}' ."\n";
			}
		}


		$scripttext .= '    map.setCenter(p_center, p_zoom );' ."\n";


		$scripttext .= 'var placemark = new YMaps.Placemark(p_center, {draggable: true});' ."\n";
		$scripttext .= 'placemark.name = "";' ."\n";
		$scripttext .= 'placemark.description = "";'."\n";
		$scripttext .= 'map.addOverlay(placemark);' ."\n";
		$scripttext .= 'placemark.openBalloon();' ."\n";

		$scripttext .= 'YMaps.Events.observe(placemark, placemark.Events.Drag, function (obj) {' ."\n";
		$scripttext .= '    var current = obj.getGeoPoint().copy();' ."\n";
		$scripttext .= '    document.forms.adminForm.jform_helpitem.value = current.getLng() +","+current.getLat();' ."\n";
		$scripttext .= '});' ."\n";

		$scripttext .= 'YMaps.Events.observe(map, map.Events.Click, function (map, mEvent) {' ."\n";
		$scripttext .= '    var current = mEvent.getGeoPoint().copy();' ."\n";
		$scripttext .= '    placemark.setGeoPoint(current);' ."\n";
		$scripttext .= '    document.forms.adminForm.jform_helpitem.value = current.getLng() +","+current.getLat();' ."\n";
		$scripttext .= '});' ."\n";

		
	$scripttext .= '});' ."\n";
		
	$scripttext .= '//]]></script>' ."\n";
	// Script end

	$document->addScript($scriptlink . $loadmodules);
	
}

echo $scripttext;

?>
</div>



<div class="row-fluid">
	<input type="hidden" name="task" value="mappath.edit" />
	<?php echo JHtml::_('form.token'); ?>
</div>


</div>

</form>


