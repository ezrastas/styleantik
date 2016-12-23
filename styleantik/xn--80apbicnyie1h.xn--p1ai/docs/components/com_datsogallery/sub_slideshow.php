<?php defined ('_VALID_MOS') or die( 'Direct Access to this location is not allowed.' ); ?>

<script type="text/javascript">
var slideShowSpeed = 5000
var crossFadeDuration = 3
var Pic = new Array()
var Descr = new Array()
<?php
  $i = 0;
  $j = 0;
  while ($i<count($fn_cache) && ($ft_cache)) {
    echo "Pic[$i] = '".$fn_cache[$i]."'\n";
    echo "Descr[$i] = '".$ft_cache[$i]."'\n";
    if ($id_cache[$i] == $id){
      $j = $i;
    }
  $i++;
  }
?>

var t
var j = <?php echo "$j\n" ?>
var p = Pic.length
var pos = j
var preLoad = new Array()

function preLoadPic(index){
  if (Pic[index] != ''){
    window.status='Loading : '+Pic[index]
    preLoad[index] = new Image()
    preLoad[index].src = Pic[index]
    Pic[index] = ''
    window.status=''
  }
}

function runSlideShow(){
  if (stopstatus != '1'){
    if (document.all){
      document.images.SlideShow.style.filter="blendTrans(duration=2)"
      document.images.SlideShow.style.filter= "blendTrans(duration=crossFadeDuration)"
      document.images.SlideShow.filters.blendTrans.Apply()
    }
    overlib = false
    document.images.SlideShow.src = preLoad[j].src
    if (document.all){
      document.images.SlideShow.filters.blendTrans.Play()
    }
    pos = j
    document.getElementById('ImgText').innerHTML = Descr[j]
    j = j + 1
    if (j > (p-1)) j=0
    t = setTimeout('runSlideShow()', slideShowSpeed)
    preLoadPic(j)
  }
}

function endSlideShow(){
  stopstatus = 1
}

preLoadPic(j)
</script>
