
/*------------------------------------------------------------------------
# Map Object Manager Class
# ------------------------------------------------------------------------
# author:    Dmitry Zhuk
# copyright: Copyright (C) 2013 zhuk.cc. All Rights Reserved.
# license:   http://creativecommons.org/licenses/by-nc-nd/4.0/
#            Creative Commons Attribution-NonCommercial-NoDerivatives 4.0 International License.
# website:   http://zhuk.cc
# Technical Support Forum: http://forum.zhuk.cc/
-------------------------------------------------------------------------*/
function zhymMapObjectManager(){zhymMapObjectManager.ac+=1;this.bQ=zhymMapObjectManager.ac;this.G=[];this.eU=[];this.fI=[];this.aY=[];this.bL=[];this.al=[];this.ct=[];this.bE=[];this.fr=[];this.dS=[];this.ay=false;this.placemarkClusterizationClickZoom=true;this.bm=false;this.az=false;this.objectGroupManagementType="Independent";this.bI=false;this.aZ=false;this.eB=false;this.dZ=false;this.et=32;this.eS=35;this.ew=35;this.fg;this.er=false;this.bz=0;this.bB="";this.bO="";this.bF="";this.articleID="";this.aw=0;this.bV="";this.aP="";this.aQ="";this.bq=0;this.aD=0;this.fC=0;this.map=null;this.mapLanguageTag="";this.bG=null;this.dj=null;this.aj=null;this.bp="2.0";this.bN=[];this.R=null;this.C=null;this.J=null;this.h=[];this.bK=null;this.ah=null;this.aH=null;this.by=null;this.ao=null;this.bs=null;this.dQ=null;this.cb=null;this.bS="";this.cZ="";this.cA="";this.dw="";this.cp="";this.dA="";this.fn=0;this.aC=0;this.compatiblemode=0;this.placemarkTitleTag="";zhymMapObjectManager.aO[this.bQ]=this;this.fF='a-markergroup_';};zhymMapObjectManager.ac=0;zhymMapObjectManager.aO=[];zhymMapObjectManager.prototype.setAPIversion=function(t){this.bp=t;};zhymMapObjectManager.prototype.setCompatibleMode=function(t){this.compatiblemode=t;};zhymMapObjectManager.prototype.setAjaxBufferSize=function(t){this.fn=t;};zhymMapObjectManager.prototype.setPlacemarkLoadType=function(t){this.aC=t;};zhymMapObjectManager.prototype.setMap=function(t){this.map=t;};zhymMapObjectManager.prototype.setObjectGroupManagementType=function(t){this.objectGroupManagementType=t;};zhymMapObjectManager.prototype.setMapLanguageTag=function(t){this.mapLanguageTag=t;};zhymMapObjectManager.prototype.setInfowin=function(t){this.bG=t;};zhymMapObjectManager.prototype.setCenterPlacemark=function(t){this.aP=t;};zhymMapObjectManager.prototype.setRequestURL=function(t){this.bV=t;};zhymMapObjectManager.prototype.setZhJQ=function(t){this.aj=t;};zhymMapObjectManager.prototype.setContactAttrs=function(t){this.aQ=t;};zhymMapObjectManager.prototype.setUserContact=function(t){this.bq=t;};zhymMapObjectManager.prototype.setUserUser=function(t){this.aD=t;};zhymMapObjectManager.prototype.setServiceDirection=function(t){this.bz=t;};zhymMapObjectManager.prototype.setIcoIcon=function(t){this.bB=t;};zhymMapObjectManager.prototype.setIcoUtils=function(t){this.bO=t;};zhymMapObjectManager.prototype.setIcoDir=function(t){this.bF=t;};zhymMapObjectManager.prototype.setArticleID=function(t){this.articleID=t;this.fF='a-markergroup'+t+"_";};zhymMapObjectManager.prototype.setPlacemarkRating=function(t){this.aw=t;};zhymMapObjectManager.prototype.setPlacemarkTitleTag=function(t){this.placemarkTitleTag=t;};zhymMapObjectManager.prototype.setPlacemarkCreationInfo=function(t){this.fC=t;};zhymMapObjectManager.prototype.setHoverInfoBubble=function(t){this.J=t;};zhymMapObjectManager.prototype.setHoverInfoWindow=function(t){this.C=t;};zhymMapObjectManager.prototype.setHoverMarkerType=function(t){this.R=t;};zhymMapObjectManager.prototype.setUserMarkersFilter=function(t){this.bs=String(t).replace(/\s+/g,"");};zhymMapObjectManager.prototype.setCategotyList=function(t){this.ao=String(t).replace(/\s+/g,"");};zhymMapObjectManager.prototype.setGroupList=function(t){this.by=String(t).replace(/\s+/g,"");};zhymMapObjectManager.prototype.setExcludePlacemarkList=function(t){this.aH=String(t).replace(/\s+/g,"");};zhymMapObjectManager.prototype.setPlacemarkList=function(t){this.ah=String(t).replace(/\s+/g,"");};zhymMapObjectManager.prototype.setMapID=function(t){this.bK=String(t).replace(/\s+/g,"");};zhymMapObjectManager.prototype.enableObjectGroupManagement=function(){this.az=true;};zhymMapObjectManager.prototype.enablePlacemarkList=function(){this.er=true;};zhymMapObjectManager.prototype.enablePlacemarkGroupManagement=function(){this.bI=true;};zhymMapObjectManager.prototype.enablePathGroupManagement=function(){this.aZ=true;};zhymMapObjectManager.prototype.enablePlacemarkSpiderManagement=function(){this.dZ=true;};zhymMapObjectManager.prototype.disablePlacemarkClusterizationClickZoom=function(){this.placemarkClusterizationClickZoom=false;};zhymMapObjectManager.prototype.enablePathXGroupManagement=function(){this.eB=true;};zhymMapObjectManager.prototype.enablePlacemarkClusterization=function(){this.ay=true;};zhymMapObjectManager.prototype.enablePlacemarkClusterizationByGroup=function(){this.bm=true;};zhymMapObjectManager.prototype.PlacemarkAdd=function(L,co,T,K){zhymMapObjectManager.prototype.cE(this,L,co,T,K);};zhymMapObjectManager.prototype.cE=function(l,L,co,T,K){var k=l;var bv=L;var bi;k.bN[co]=T;if(typeof k.aY[bv]!=='undefined'){k.aY[bv]=1;bi=k.bL[bv];bi.push(T);k.bL[bv]=bi;}else{k.aY[bv]=1;k.bL[bv]=[T];}};zhymMapObjectManager.prototype.PathAdd=function(L,bH){zhymMapObjectManager.prototype.dh(this,L,bH);};zhymMapObjectManager.prototype.PathXAdd=function(L,bH){zhymMapObjectManager.prototype.ep(this,L,bH);};zhymMapObjectManager.prototype.dh=function(l,L,bH){var k=l;var bv=L;var bi;if(typeof k.ct[bv]!=='undefined'){k.ct[bv]=1;bi=k.bE[bv];bi.push(bH);k.bE[bv]=bi;}else{k.ct[bv]=1;k.bE[bv]=[bH];}};zhymMapObjectManager.prototype.allObjectsAddPlacemark=function(cq,T){zhymMapObjectManager.prototype.eL(this,cq,T);};zhymMapObjectManager.prototype.eL=function(l,eW,T){var k=l;var bv=eW;var bi;if(typeof k.eU[bv]!=='undefined'){bi=k.eU[bv];bi.push(T);k.eU[bv]=bi;}else{k.eU[bv]=[T];}};zhymMapObjectManager.prototype.ec=function(l,ll){var k=l;var dc=k.fg;return dc.getProjection().fromLatLngToDivPixel(ll);};zhymMapObjectManager.prototype.eY=function(l,pt){var k=l;var dc=k.fg;return dc.getProjection().fromDivPixelToLatLng(pt);};zhymMapObjectManager.prototype.RestoreSpidered=function(){var k=this;k.fw();};zhymMapObjectManager.prototype.fw=function(){var k=this;var bJ;var bd;var fm;if(k.dZ){fm=k.fI;for(var i=0;i<fm.length;i++){bd=fm[i];if((typeof bd!=='undefined')&&(bd!=null)){if((typeof bd!=='undefined')&&(bd!=null)){}}}k.fI=[];}};zhymMapObjectManager.prototype.canDoClick=function(cq){var k=this;var es;var fm;var bd;var dN,df,ds;var eO,fE,ea;es=k.fI[cq];if((typeof es!=='undefined')&&(es!=null)){return 0;}k.fw();k.fI=[];dN=zhymMapObjectManager.prototype.fG(k,cq);if(dN==1){es=k.fI[cq];fs=es.geometry.getCoordinates();eO=zhymMapObjectManager.prototype.ec(k,fs);var fe=k.eS*10,fi=10;var eg=2*Math.PI;var cD,cG;var el=fi*2*Math.PI;var fD=fe/el;var cu=k.ew;var dp=cu/fD;fm=k.fI;for(var i=0;i<fm.length;i++){bd=k.fI[i];if((typeof bd!=='undefined')&&(bd!=null)){cD=fD*dp;cG=dp+eg;df=eO.x+Math.cos(cG)*cD;ds=eO.y+Math.sin(cG)*cD;fE=new google.maps.Point(df,ds);ea=zhymMapObjectManager.prototype.eY(k,fE);dp+=cu/cD;}}}else{k.fI=[];}return dN;};zhymMapObjectManager.prototype.fG=function(l,cq){var k=l;var fm;var es;var bJ;var bd;var fs;var eO;var ei,bP;var ey,fN;var dX;var ak=k.map;var cC;var bv,dN,df,ds,aM,bC,bk,ap;if(k.dZ){if(k.eU[cq]===undefined){alert("Unable to find placemark with ID = "+cq);}else{cC=0;es=k.fI[cq];if((typeof es!=='undefined')&&(es!=null)){return 0;}else{fm=k.eU[cq];es=fm[0];k.fI[cq]=es;fs=es.geometry.getCoordinates();eO=zhymMapObjectManager.prototype.ec(k,fs);aM=eO.x+k.et/2;bC=eO.y+k.et/2;bk=eO.x-k.et/2;ap=eO.y-k.et/2;if(aM<bk){df=aM;aM=bk;bk=df;}if(bC<ap){ds=bC;bC=ap;ap=ds;}ei=new google.maps.Point(bk,ap);ey=new google.maps.Point(aM,bC);bP=zhymMapObjectManager.prototype.eY(k,ei);fN=zhymMapObjectManager.prototype.eY(k,ey);aM=fN.lng();bC=fN.lat();bk=bP.lng();ap=bP.lat();if(aM<bk){df=aM;aM=bk;bk=df;}if(bC<ap){ds=bC;bC=ap;ap=ds;}bP=new google.maps.LatLng(ap,bk);fN=new google.maps.LatLng(bC,aM);dX=new google.maps.LatLngBounds(bP,fN);fm=k.eU;for(var i=0;i<fm.length;i++){bJ=fm[i];if((typeof bJ!=='undefined')&&(bJ!=null)){bd=bJ[0];if((typeof bd!=='undefined')&&(bd!=null)){if(bd.properties.get("zhymPlacemarkID")!=es.properties.get("zhymPlacemarkID")){if(bd.getVisible()&&(bd.getMap()!=null)){if(dX.contains(bd.geometry.getCoordinates())){zhymMapObjectManager.prototype.fG(k,bd.properties.get("zhymPlacemarkID"));cC=1;}}}}}}return cC;}}}else{return 0;}};zhymMapObjectManager.prototype.ep=function(l,L,bH){var k=l;var bv=L;var bi;if(typeof k.fr[bv]!=='undefined'){k.fr[bv]=1;bi=k.dS[bv];bi.push(bH);k.dS[bv]=bi;}else{k.fr[bv]=1;k.dS[bv]=[bH];}};zhymMapObjectManager.prototype.PlacemarkCount=function(){return this.bL.length;};zhymMapObjectManager.prototype.au=function(ee,dn){var F;var aG=ee;for(var i=0;i<aG.length;i++){F=aG[i];if((typeof F!=='undefined')&&(F!=null)){if(F!=0){this.aI(i,dn);}}}};zhymMapObjectManager.prototype.ab=function(L,aB){var ai=aB;var bg;var bu;var bv;var eu;var ak;if((typeof ai!=='undefined')&&(ai!=null)){if(this.az&&this.bI){var aU=this.G[L];if((typeof aU!=='undefined')&&(aU==1)){if(this.ay){if(this.bm){bg=this.al[L];bg.add(ai);}else{bg=this.al[0];bg.add(ai);}}else{for(var ag=0;ag<ai.length;ag++){bu=ai[ag];ak=this.map;ak.geoObjects.add(bu);}}if(this.er){for(var ag=0;ag<ai.length;ag++){bu=ai[ag];bv="zhym_pmlist_item_"+this.articleID+"_"+bu.properties.get("zhymPlacemarkID");eu=document.getElementById(bv);if(eu!=null){eu.style.display='block';}}}}}else{if(this.ay){if(this.bm){bg=this.al[L];bg.add(ai);}else{bg=this.al[0];bg.add(ai);}}else{for(var ag=0;ag<ai.length;ag++){bu=ai[ag];ak=this.map;ak.geoObjects.add(bu);}}if(this.er){for(var ag=0;ag<ai.length;ag++){bu=ai[ag];bv="zhym_pmlist_item_"+this.articleID+"_"+bu.properties.get("zhymPlacemarkID");eu=document.getElementById(bv);if(eu!=null){eu.style.display='block';}}}}}};zhymMapObjectManager.prototype.aN=function(L,aB){var ai=aB;var bg;var bu;var bv;var eu;var ak;if((typeof ai!=='undefined')&&(ai!=null)){if(this.az&&this.bI){var aU=this.G[L];if((typeof aU==='undefined')||(aU==0)){if(this.ay){if(this.bm){bg=this.al[L];bg.remove(ai);}else{bg=this.al[0];bg.remove(ai);}}else{for(var ag=0;ag<ai.length;ag++){bu=ai[ag];ak=this.map;ak.geoObjects.remove(bu);}}if(this.er){for(var ag=0;ag<ai.length;ag++){bu=ai[ag];bv="zhym_pmlist_item_"+this.articleID+"_"+bu.properties.get("zhymPlacemarkID");eu=document.getElementById(bv);if(eu!=null){eu.style.display='none';}}}}}else{if(this.ay){if(this.bm){bg=this.al[L];bg.remove(ai);}else{bg=this.al[0];bg.remove(ai);}}else{for(var ag=0;ag<ai.length;ag++){bu=ai[ag];ak=this.map;ak.geoObjects.remove(bu);}}if(this.er){for(var ag=0;ag<ai.length;ag++){bu=ai[ag];bv="zhym_pmlist_item_"+this.articleID+"_"+bu.properties.get("zhymPlacemarkID");eu=document.getElementById(bv);if(eu!=null){eu.style.display='none';}}}}}};zhymMapObjectManager.prototype.aI=function(L,dn){var ai=dn[L];this.ab(L,ai);};zhymMapObjectManager.prototype.ClusterAdd=function(L,ar){this.al[L]=ar;};zhymMapObjectManager.prototype.aq=function(l,v,bD){if(v.dataexists==1){var k=l;var aR=parseInt(v.actionbyclick);var bM=parseInt(v.zoombyclick);var ak=k.map;if(k.dZ){if(k.canDoClick(bD.properties.get("zhymPlacemarkID"))==1){return;}}if(aR==0){if(bM!=100){ak.setCenter(bD.geometry.getCoordinates());ak.setZoom(bM);}}else if(aR==1){var O=eval(v.contentstringheader);bD.properties.set("balloonContentHeader",O);O=eval(v.contentstringbody);bD.properties.set("balloonContentBody",O);O=eval(v.contentstringheadercluster);bD.properties.set("clusterCaption",O);if(bM!=100){ak.setCenter(bD.geometry.getCoordinates());ak.setZoom(bM);}}else if(aR==2){if(bM!=100){ak.setCenter(bD.geometry.getCoordinates());ak.setZoom(bM);}var cI=v.hrefsite;window.open(cI);}else if(aR==3){if(bM!=100){ak.setCenter(bD.geometry.getCoordinates());ak.setZoom(bM);}var cI=v.hrefsite;window.location=cI;}else{alert("Unexpected action by click: "+v.actionbyclick);}}else{}};zhymMapObjectManager.prototype.GetPlacemarkAJAX=function(V){var bw=this.bV+'index.php?option=com_zhyandexmap&no_html=1&format=raw&task=getAJAXPlacemarkList';var ak=this.map;var fl=this.bK;var ff=this.ah;var ej=this.aH;var eD=this.by;var aW=this.ao;var bo=this.bs;var k=this;var aE=ak.getBounds();var aa=this.aC;var av={mapid:fl,placemarklistid:ff,explacemarklistid:ej,grouplistid:eD,categorylistid:aW,usermarkersfilter:bo,placemarkloadtype:aa,x1:aE[0][0],y1:aE[0][1],x2:aE[1][0],y2:aE[1][1],};if(V=='mootools'){var dr=new Request({url:bw,method:'post',data:av,async:true,onSuccess:function(responseText){var H=document.getElementById("YMapsLoading"+k.articleID);H.style.display='none';var bc=JSON.decode(responseText);zhymMapObjectManager.prototype.aA(V,k,bc);},onRequest:function(){var H=document.getElementById("YMapsLoading"+k.articleID);H.style.display='block';},onFailure:function(xhr){var H=document.getElementById("YMapsLoading"+k.articleID);H.style.display='none';alert(xhr.status+','+xhr.statusText+','+xhr.responseText);}}).send();}else if(V=='jquery'){ae=k.aj;ae.ajax({url:bw,type:'post',data:av,dataType:'json',async:true,success:function(responseText){var H=document.getElementById("YMapsLoading"+k.articleID);H.style.display='none';var bc=responseText;zhymMapObjectManager.prototype.aA(V,k,bc);},beforeSend:function(){var H=document.getElementById("YMapsLoading"+k.articleID);H.style.display='block';},fail:function(xhr,textStatus){var H=document.getElementById("YMapsLoading"+k.articleID);H.style.display='none';alert("Error"+textStatus);}});}};zhymMapObjectManager.prototype.eZ=function(V,l,ed){var k=l;var bf=ed;var bv;var bA;if(k.placemarkClusterizationClickZoom){bA=0;}else{bA=1;}var bw=k.bV+'index.php?option=com_zhyandexmap&no_html=1&format=raw&task=getAJAXPlacemarks';var av={ajaxarray:bf,getdetails:bA,contactattrs:k.aQ,usercontact:k.bq,useruser:k.aD,servicedirection:k.bz,iconicon:k.bB,iconutil:k.bO,icondir:k.bF,articleid:k.articleID,placemarkrating:k.aw,placemarktitletag:k.placemarkTitleTag,language:k.mapLanguageTag,showcreateinfo:k.fC};if(V=='mootools'){var dr=new Request({url:bw,method:'post',data:av,async:true,onSuccess:function(responseText){var H=document.getElementById("YMapsLoading"+k.articleID);H.style.display='none';var bc=JSON.decode(responseText);zhymMapObjectManager.prototype.da(V,k,bc);},onRequest:function(){var H=document.getElementById("YMapsLoading"+k.articleID);H.style.display='block';},onFailure:function(xhr){var H=document.getElementById("YMapsLoading"+k.articleID);H.style.display='none';alert(xhr.status+','+xhr.statusText+','+xhr.responseText);}}).send();}else if(V=='jquery'){ae=k.aj;ae.ajax({url:bw,type:'post',data:av,dataType:'json',async:true,success:function(responseText){var H=document.getElementById("YMapsLoading"+k.articleID);H.style.display='none';var bc=responseText;zhymMapObjectManager.prototype.da(V,k,bc);},beforeSend:function(){var H=document.getElementById("YMapsLoading"+k.articleID);H.style.display='block';},fail:function(xhr,textStatus){var H=document.getElementById("YMapsLoading"+k.articleID);H.style.display='none';alert("Error"+textStatus);}});}};zhymMapObjectManager.prototype.aA=function(V,l,aK){if(aK.dataexists==1){var bJ=aK.markers;var k=l;var bf=[];var bv;var fv=k.fn;var cN;cN=0;for(var i=0;i<bJ.length;i++){bv=bJ[i].id;if(typeof k.bN[bv]!=='undefined'){}else{bf.push(bv);if(fv!=0){cN+=1;if(cN>=fv){cN=0;var ba=bf.slice(0);zhymMapObjectManager.prototype.eZ(V,k,ba);bf=[];}}}}var ba=bf.slice(0);if(ba.length!=0){zhymMapObjectManager.prototype.eZ(V,k,ba);}bf=[];}else{}};zhymMapObjectManager.prototype.da=function(V,l,v){var aG=[];var cv=[];var bi;var dP;if(v.dataexists==1){var bJ=v.markers;var k=l;var bv;var aV;for(var i=0;i<bJ.length;i++){bv=bJ[i].id;aV=bJ[i].markergroup;if(typeof k.bN[bv]!=='undefined'){}else{dP=k.dC(V,k,bJ[i]);if((typeof aG[aV]!=='undefined')&&(aG[aV]!=null)){aG[aV]+=1;bi=cv[aV];bi.push(dP);cv[aV]=bi;}else{aG[aV]=1;cv[aV]=[dP];}}}k.au(aG,cv);}else{}};zhymMapObjectManager.prototype.dC=function(V,l,an){var k=l;var bj=[an.longitude,an.latitude];var aF=new ymaps.Placemark(bj);if(parseInt(an.actionbyclick)==1){aF.options.set("hasBalloon",true);}else{aF.options.set("hasBalloon",false);}aF.properties.set("hintContent",an.title);if(an.xxx_getdetails="1"){var O=eval(an.xxx_contentstringheader);aF.properties.set("balloonContentHeader",O);O=eval(an.xxx_contentstringbody);aF.properties.set("balloonContentBody",O);O=eval(an.xxx_contentstringheadercluster);aF.properties.set("clusterCaption",O);}if((parseInt(an.overridemarkericon)==1)&&(parseInt(an.publishedgroup)==1)){if((an.groupiconofsetx!="")&&(an.groupiconofsety!="")){var bb=new Image();bb.onload=function(){var aX;if(an.groupicontype.substr(0,8)=="default#"){aX=7;}else{aX=$imgwidth/2;}var bU=parseInt(an.groupiconofsetx)-aX;var ad=parseInt(an.groupiconofsety)-this.height;if(k.bp!="2.0"){aF.options.set("iconLayout",'default#image');}aF.options.set("iconImageHref",k.bB+an.groupicontype.replace("#","%23")+".png");aF.options.set("iconImageSize",[this.width,this.height]);aF.options.set("iconImageOffset",[bU,ad]);};bb.src=k.bB+an.groupicontype.replace("#","%23")+".png";}else{var bb=new Image();bb.onload=function(){if(k.bp!="2.0"){aF.options.set("iconLayout",'default#image');}aF.options.set("iconImageHref",k.bB+an.groupicontype.replace("#","%23")+".png");aF.options.set("iconImageSize",[this.width,this.height]);};bb.src=k.bB+an.groupicontype.replace("#","%23")+".png";}}else{if(parseInt(an.showiconcontent)==0){if((an.iconofsetx!="")&&(an.iconofsety!="")){var bb=new Image();bb.onload=function(){var aX;if(an.icontype.substr(0,8)=="default#"){aX=7;}else{aX=$imgwidth/2;}var bU=parseInt(an.iconofsetx)-aX;var ad=parseInt(an.iconofsety)-this.height;if(k.bp!="2.0"){aF.options.set("iconLayout",'default#image');}aF.options.set("iconImageHref",k.bB+an.icontype.replace("#","%23")+".png");aF.options.set("iconImageSize",[this.width,this.height]);aF.options.set("iconImageOffset",[bU,ad]);};bb.src=k.bB+an.icontype.replace("#","%23")+".png";}else{var bb=new Image();bb.onload=function(){if(k.bp!="2.0"){aF.options.set("iconLayout",'default#image');}aF.options.set("iconImageHref",k.bB+an.icontype.replace("#","%23")+".png");aF.options.set("iconImageSize",[this.width,this.height]);};bb.src=k.bB+an.icontype.replace("#","%23")+".png";}}else{if(an.preseticontype!=""){aF.options.set("preset",an.preseticontype);}else{aF.options.set("preset","twirl#blueStretchyIcon");}if(parseInt(an.showiconcontent)==1){if(an.presettitle!=""){aF.properties.set("iconContent",an.presettitle);}else{aF.properties.set("iconContent",an.title);}}}}zhymMapObjectManager.prototype.cE(k,an.markergroup,an.id,aF,an);aF.properties.set("zhymPlacemarkID",an.id);aF.properties.set("zhymContactAttrs",k.aQ);aF.properties.set("zhymUserContact",k.bq);aF.properties.set("zhymUserUser",k.aD);aF.properties.set("zhymOriginalPosition",aF.geometry.getCoordinates());if(k.dZ){k.allObjectsAddPlacemark(an.id,aF);}zhymMapObjectManager.prototype.as(V,k,aF);if(k.R){if(an.hoverhtml!=""){zhymMapObjectManager.prototype.aS(V,k,aF);}}if(k.aP==an.id){k.map.setCenter(bj);}return aF;};zhymMapObjectManager.prototype.PlacemarkAddListeners=function(V,an){var k=this;k.as(V,k,an);};zhymMapObjectManager.prototype.as=function(V,l,am){am.events.add('click',function(event){var k=l;var bw=k.bV+'index.php?option=com_zhyandexmap&no_html=1&format=raw&task=getPlacemarkDetails';var av={id:am.properties.get("zhymPlacemarkID"),contactattrs:am.properties.get("zhymContactAttrs"),usercontact:am.properties.get("zhymUserContact"),useruser:am.properties.get("zhymUserUser"),servicedirection:k.bz,iconicon:k.bB,iconutil:k.bO,icondir:k.bF,articleid:k.articleID,placemarkrating:k.aw,placemarktitletag:k.placemarkTitleTag,language:k.mapLanguageTag,showcreateinfo:k.fC};var aL=am;if(V=='mootools'){var dr=new Request({url:bw,method:'post',data:av,async:true,onSuccess:function(responseText){var H=document.getElementById("YMapsLoading"+k.articleID);H.style.display='none';var bc=JSON.decode(responseText);zhymMapObjectManager.prototype.aq(k,bc,aL);},onRequest:function(){var H=document.getElementById("YMapsLoading"+k.articleID);H.style.display='block';},onFailure:function(xhr){var H=document.getElementById("YMapsLoading"+k.articleID);H.style.display='none';alert(xhr.status+','+xhr.statusText+','+xhr.responseText);}}).send();}else if(V=='jquery'){ae=k.aj;ae.ajax({url:bw,type:'post',data:av,dataType:'json',async:true,success:function(responseText){var H=document.getElementById("YMapsLoading"+k.articleID);H.style.display='none';var bc=responseText;zhymMapObjectManager.prototype.aq(k,bc,aL);},beforeSend:function(){var H=document.getElementById("YMapsLoading"+k.articleID);H.style.display='block';},fail:function(xhr,textStatus){var H=document.getElementById("YMapsLoading"+k.articleID);H.style.display='none';alert("Error"+textStatus);}});}});};zhymMapObjectManager.prototype.PlacemarkAddHoverListeners=function(V,an){var k=this;zhymMapObjectManager.prototype.aS(V,k,an);};zhymMapObjectManager.prototype.aS=function(V,l,am){var k=l;};zhymMapObjectManager.prototype.bh=function(l,v,bD){if(v.dataexists==1){var k=l;}else{}};zhymMapObjectManager.prototype.GroupStateDefine=function(L,bn){this.G[L]=bn;};zhymMapObjectManager.prototype.dE=function(L,ax){var ai=ax;var bx;var aU;var ak;if((typeof ai!=='undefined')&&(ai!=null)){if(this.az&&this.aZ){aU=this.G[L];if((typeof aU!=='undefined')&&(aU==1)){for(var ag=0;ag<ai.length;ag++){bx=ai[ag];ak=this.map;ak.geoObjects.add(bx);}}}else{for(var ag=0;ag<ai.length;ag++){bx=ai[ag];ak=this.map;ak.geoObjects.add(bx);}}}};zhymMapObjectManager.prototype.cn=function(L,ax){var ai=ax;var bx;var aU;var ak;if((typeof ai!=='undefined')&&(ai!=null)){if(this.az&&this.aZ){aU=this.G[L];if((typeof aU==='undefined')||(aU==0)){for(var ag=0;ag<ai.length;ag++){bx=ai[ag];ak=this.map;ak.geoObjects.remove(bx);}}}else{for(var ag=0;ag<ai.length;ag++){bx=ai[ag];ak=this.map;ak.geoObjects.remove(bx);}}}};zhymMapObjectManager.prototype.eb=function(L,ax){var ai=ax;var bx;var aU;var ak;if((typeof ai!=='undefined')&&(ai!=null)){if(this.az&&this.eB){aU=this.G[L];if((typeof aU!=='undefined')&&(aU==1)){for(var ag=0;ag<ai.length;ag++){bx=ai[ag];ak=this.map;ak.geoObjects.add(bx);}}}else{for(var ag=0;ag<ai.length;ag++){bx=ai[ag];ak=this.map;ak.geoObjects.add(bx);}}}};zhymMapObjectManager.prototype.fh=function(L,ax){var ai=ax;var bx;var aU;var ak;if((typeof ai!=='undefined')&&(ai!=null)){if(this.az&&this.eB){aU=this.G[L];if((typeof aU==='undefined')||(aU==0)){for(var ag=0;ag<ai.length;ag++){bx=ai[ag];ak=this.map;ak.geoObjects.remove(bx);}}}else{for(var ag=0;ag<ai.length;ag++){bx=ai[ag];ak=this.map;ak.geoObjects.remove(bx);}}}};zhymMapObjectManager.prototype.GroupStateToggle=function(L){if(this.az){if(this.objectGroupManagementType=="OnlyOneActive"){this.GroupStateHideAll();var aU=this.G[L];if((typeof aU==='undefined')||(aU==0)){this.GroupStateShow(L);}else{this.GroupStateHide(L);}}else{var aU=this.G[L];if((typeof aU==='undefined')||(aU==0)){this.GroupStateShow(L);}else{this.GroupStateHide(L);}}}};zhymMapObjectManager.prototype.GroupStateShow=function(L){var F;if(this.az){var fM=this.fF+L;var af=document.getElementById(fM);var aU=this.G[L];if((typeof aU==='undefined')||(aU==0)){this.G[L]=1;if(this.bI){F=this.bL[L];if(typeof F!=='undefined'){this.ab(L,F);}}if(this.aZ){F=this.bE[L];if(typeof F!=='undefined'){this.dE(L,F);}}if(this.eB){F=this.dS[L];if(typeof F!=='undefined'){this.eb(L,F);}}if(this.compatiblemode==1){ez(af,"active");}else{af.addClass("active");}}}};zhymMapObjectManager.prototype.GroupStateHide=function(L){var F;if(this.az){var fM=this.fF+L;var af=document.getElementById(fM);var aU=this.G[L];if((typeof aU!=='undefined')&&(aU==1)){this.G[L]=0;if(this.bI){F=this.bL[L];if(typeof F!=='undefined'){this.aN(L,F);}}if(this.aZ){F=this.bE[L];if(typeof F!=='undefined'){this.cn(L,F);}}if(this.eB){F=this.dS[L];if(typeof F!=='undefined'){this.fh(L,F);}}if(this.compatiblemode==1){eI(af,"active");}else{af.removeClass("active");}}}};zhymMapObjectManager.prototype.GroupStateShowAll=function(){var bv;if(this.az){for(var i=1;i<this.G.length;i++){bv=this.G[i];if(typeof bv!=='undefined'){this.GroupStateShow(i);}}}};zhymMapObjectManager.prototype.GroupStateHideAll=function(){var bv;if(this.az){for(var i=1;i<this.G.length;i++){bv=this.G[i];if(typeof bv!=='undefined'){this.GroupStateHide(i);}}}};zhymMapObjectManager.prototype.InitializeByGroupState=function(){var bv;var F;for(var i=0;i<this.G.length;i++){bv=this.G[i];if(typeof bv!=='undefined'){if(this.az){if(this.bI){if(bv==1){F=this.bL[i];if(typeof F!=='undefined'){this.ab(i,F);}}else{F=this.bL[i];if(typeof F!=='undefined'){this.aN(i,F);}}}else{F=this.bL[i];if(typeof F!=='undefined'){this.ab(i,F);}}}else{F=this.bL[i];if(typeof F!=='undefined'){this.ab(i,F);}}if(this.az){if(this.aZ){if(bv==1){F=this.bE[i];if(typeof F!=='undefined'){this.dE(i,F);}}else{F=this.bE[i];if(typeof F!=='undefined'){this.cn(i,F);}}}else{F=this.bE[i];if(typeof F!=='undefined'){this.dE(i,F);}}}else{F=this.bE[i];if(typeof F!=='undefined'){this.dE(i,F);}}if(this.az){if(this.eB){if(bv==1){F=this.dS[i];if(typeof F!=='undefined'){this.eb(i,F);}}else{F=this.dS[i];if(typeof F!=='undefined'){this.fh(i,F);}}}else{F=this.dS[i];if(typeof F!=='undefined'){this.eb(i,F);}}}else{F=this.dS[i];if(typeof F!=='undefined'){this.eb(i,F);}}}}};zhymMapObjectManager.prototype.PlacemarkRateMouseOver=function(cq,cU,dv){var k=this;var aJ;for(var i=1;i<=cU;i++){aJ=document.getElementById("placemarkRateImage"+cq+"_"+i);aJ.src=k.bO+"star1_10.png";}for(var i=cU+1;i<=dv;i++){aJ=document.getElementById("placemarkRateImage"+cq+"_"+i);aJ.src=k.bO+"star1_00.png";}};zhymMapObjectManager.prototype.PlacemarkRateMouseOut=function(cq,cU,dv){var k=this;var aJ;for(var i=1;i<=dv;i++){aJ=document.getElementById("placemarkRateImage"+cq+"_"+i);aJ.src=k.bO+"star1_00.png";}};zhymMapObjectManager.prototype.PlacemarkRateDivMouseOut=function(cq,dv){var k=this;zhymMapObjectManager.prototype.PlacemarkRateDivShowRate(k,cq,dv);};zhymMapObjectManager.prototype.PlacemarkRateDivShowRate=function(l,cq,dv){var k=l;var dk=dv;if(k.bN[cq]===undefined){alert("Unable to find placemark with ID = "+cq);}else{var cP=k.bN[cq];var cJ=cP.properties.get("zhymRating");var dF=Math.floor(cJ);var cd;var aJ;if(cJ>dk){cJ=dk;dF=dk;}cd=0;if(cJ==0){cd++;aJ=document.getElementById("placemarkRateImage"+cq+"_"+cd);aJ.src=k.bO+"star0_00.png";}else if(dF==0&&cJ>0){cd++;aJ=document.getElementById("placemarkRateImage"+cq+"_"+cd);aJ.src=k.bO+"star0_05.png";}else{for(var i=0;i<dF;i++){cd++;aJ=document.getElementById("placemarkRateImage"+cq+"_"+cd);aJ.src=k.bO+"star0_10.png";}if(Math.ceil((cJ-dF)*10)>4){cd++;aJ=document.getElementById("placemarkRateImage"+cq+"_"+cd);aJ.src=k.bO+"star0_05.png";}}for(var i=cd;i<dk;i++){aJ=document.getElementById("placemarkRateImage"+cq+"_"+(i+1));aJ.src=k.bO+"star0_00.png";}}};zhymMapObjectManager.prototype.PlacemarkRateDivText=function(l,cq,cf){var k=l;if(k.bN[cq]===undefined){alert("Unable to find placemark with ID = "+cq);}else{var dg=document.getElementById("rateContentResult"+cq);dg.innerHTML=cf;}};zhymMapObjectManager.prototype.PlacemarkRateUpdate=function(V,cq,cL,dv,eF){var k=this;if(k.bN[cq]===undefined){alert("Unable to find placemark with ID = "+cq);}else{var bw=k.bV+'index.php?option=com_zhyandexmap&no_html=1&format=raw&task=setPlacemarkRating';var av={id:cq,rating:cL,language:eF};if(V=='mootools'){var dr=new Request({url:bw,method:'post',data:av,async:true,onSuccess:function(responseText){var H=document.getElementById("YMapsLoading"+k.articleID);H.style.display='none';var bc=JSON.decode(responseText);zhymMapObjectManager.prototype.be(k,bc,cq,dv);},onRequest:function(){var H=document.getElementById("YMapsLoading"+k.articleID);H.style.display='block';},onFailure:function(xhr){var H=document.getElementById("YMapsLoading"+k.articleID);H.style.display='none';alert(xhr.status+','+xhr.statusText+','+xhr.responseText);}}).send();}else if(V=='jquery'){ae=k.aj;ae.ajax({url:bw,type:'post',data:av,dataType:'json',async:true,success:function(responseText){var H=document.getElementById("YMapsLoading"+k.articleID);H.style.display='none';var bc=responseText;zhymMapObjectManager.prototype.be(k,bc,cq,dv);},beforeSend:function(){var H=document.getElementById("YMapsLoading"+k.articleID);H.style.display='block';},fail:function(xhr,textStatus){var H=document.getElementById("YMapsLoading"+k.articleID);H.style.display='none';alert("Error"+textStatus);}});}}};zhymMapObjectManager.prototype.be=function(l,v,cq,dv){var k=l;if(v.dataexists==1){if(k.bN[cq]===undefined){alert("Unable to find placemark with ID = "+cq);}else{var cP=k.bN[cq];cP.set("zhymRating",v.averagerating);zhymMapObjectManager.prototype.PlacemarkRateDivShowRate(k,cq,dv);zhymMapObjectManager.prototype.PlacemarkRateDivText(k,cq,v.errortext);}}else{zhymMapObjectManager.prototype.PlacemarkRateDivText(k,cq,v.errortext);}};zhymMapObjectManager.prototype.setMapBounds=function(db,bZ,dI,cj){var k=this;var cz=[bZ,db,cj,dI];var ak=k.map;k.dj=cz;ak.events.add("boundschange",function(){var cz=k.dj;var ak=k.map;var dN=ak.getCenter();var ds=dN[0],df=dN[1],bC=cz[3],aM=cz[2],ap=cz[1],bk=cz[0];if(aM<bk){bk=cz[2];aM=cz[0];}if(bC<ap){ap=cz[3];bC=cz[1];}if((df<=aM&&df>=bk)&&(ds<=bC&&ds>=ap))return;if(df<bk)df=bk;if(df>aM)df=aM;if(ds<ap)ds=ap;if(ds>bC)ds=bC;var aT=[];aT.push(ds);aT.push(df);ak.setCenter(aT);});};zhymMapObjectManager.prototype.enablePlacemarkListSearch=function(){var k=this;var ae=k.aj;var fm,bJ,bd;var av=[];var eA;fm=k.eU;for(var i=0;i<fm.length;i++){bJ=fm[i];if((typeof bJ!=='undefined')&&(bJ!=null)){bd=bJ[0];if((typeof bd!=='undefined')&&(bd!=null)){eA=new Object();eA.label=bd.title;eA.value=bd.properties.get("zhymPlacemarkID");av.push(eA);}}}ae("#YMapsMarkerListSearchAutocomplete"+k.articleID).autocomplete({source:av,focus:function(event,ui){if((typeof ui.item!=='undefined')&&(ui.item!=null)){ae("#YMapsMarkerListSearchAutocomplete"+k.articleID).val(ui.item.label);}return false;},select:function(event,ui){if((typeof ui.item!=='undefined')&&(ui.item!=null)){var fu="zhym_pmlist_"+k.articleID+"_"+ui.item.value;var eG=document.getElementById(fu);if(typeof eG.onclick=="function"){eG.onclick.apply(eG);}else{}ae("#YMapsMarkerListSearchAutocomplete"+k.articleID).val(ui.item.label);}return false;}});};zhymMapObjectManager.prototype.bW=function(){alert("... ShowArray ... begin ");alert("... ShowArray ... end ");}; 