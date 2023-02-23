<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<title>Consulta de datos por Ajax</title>
	<script language="JavaScript" type="text/javascript" src="ajax1.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  
	<!--Tailwind CSS-->
	<script src="js/twcss.js"></script>
	<!--Tailwind/Flowbite CSS-->
	<link rel="stylesheet" href="css/flowbite.min.css" />
	<!--Tailwind/Flowbite JS-->
	<script src="js/flowbite.min.js"></script>
</head>
<body>
	<div class="w-full h-1/6 bg-[#A780D5] flex flex-wrap">
		<div class="w-3/4 h-full bg-purple-300 flex flex-row justify-end py-5">
			<div class="h-full w-1/5 ml-2">
				<img src="logo.png" alt="image" class="h-full">
			</div>
			<div class="h-full w-full flex flex-wrap justify-end">
				<div class="h-full w-3/5 flex flex-wrap mr-2">
					<div class="h-full w-[54%] flex text-end justify-end overflow-hidden">
						<p class="text-black font-extrabold text-6xl">Turno Actual</p>
					</div>
					<div class="h-full w-[46%] flex justify-end">
						<div class="bg-white rounded-md w-[90%] h-full ">
						
							<div class="text-9xl flex items-center font-semibold justify-center h-full overflow-hidden">
								<p id="turno-actual"></p>
							</div>
						</div>
					</div>
				</div>
				<div class="h-full w-1/3 flex flex-wrap mr-2">
					<div class="h-full w-1/3 flex justify-end overflow-hidden">
						<p class="text-black font-extrabold text-6xl">Caja</p>
					</div>
					<div class="h-full w-4/6 flex justify-end">
						<div class="bg-white rounded-md w-[90%] h-full ">
							<div class="text-9xl flex items-center font-semibold justify-center h-full">
								<p id="id-actual"></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="w-1/4">
			<div class="text-7xl flex items-center font-semibold  justify-center h-full">
				<p class="text-center text-white">Llamados</p>
			</div>
		</div>
	</div>
	<div class="w-full h-5/6 flex flex-wrap">
		<div class="w-3/4 bg-black ">
			<div id="controls-carousel" class="relative" data-carousel="slide" data-carousel-interval="10000">
				<!-- Carousel wrapper -->
				<div class="relative overflow-hidden h-full mx-auto">
					<!--Obtener todas las imagentes-->
					<video src="./video/lost.mp4" class="h-full m-auto" autoplay controls  loops ></video>
					<!--Obtener todas las imagentes-->
				</div>
				<!-- Slider controls -->
			</div>
		</div>
		<div class="w-1/4 bg-[#A780D5]  px-8">
			<div class="flex flex-wrap h-full ">
				<div class="w-full">
					<div class="flex flex-row my-2 h-[9%] space-x-1">
						<div class="bg-slate-200 rounded-md w-3/4">
							<div class="text-6xl flex items-center font-semibold justify-center h-full">
								<p>Turno</p>
							</div>
						</div>
						<div class="bg-slate-200 rounded-md w-1/4">
							<div class="text-6xl flex items-center font-semibold justify-center h-full">
								<p>Caja</p>
							</div>
						</div>
					</div>
					<div id="llamado-1" class="flex flex-row my-2 h-[16%] space-x-1">
						<div class="bg-white rounded-md w-3/4">
							<div class="text-8xl flex items-center font-semibold  justify-center h-full overflow-hidden">
								<p id="llamado-turno-1"></p>
							</div>
						</div>
						<div class="bg-white rounded-md w-1/4">
							<div class="text-8xl flex items-center font-semibold  justify-center h-full">
								<p id="llamado-caja-1"></p>
							</div>
						</div>
					</div>
					<div id="llamado-2"  class="flex flex-row my-2 h-[16%] space-x-1">
						<div class="bg-white rounded-md w-3/4">
							<div class="text-8xl flex items-center font-semibold  justify-center h-full overflow-hidden">
								<p id="llamado-turno-2"></p>
							</div>
						</div>
						<div class="bg-white rounded-md w-1/4">
							<div class="text-8xl flex items-center font-semibold  justify-center h-full">
								<p id="llamado-caja-2"></p>
							</div>
						</div>
					</div>
					<div id="llamado-3"  class="flex flex-row my-2 h-[16%] space-x-1">
						<div class="bg-white rounded-md w-3/4">
							<div class="text-8xl flex items-center font-semibold justify-center h-full overflow-hidden">
								<p id="llamado-turno-3"></p>
							</div>
						</div>
						<div class="bg-white rounded-md w-1/4">
							<div class="text-8xl flex items-center font-semibold  justify-center h-full">
								<p id="llamado-caja-3"></p>
							</div>
						</div>
					</div>
					<div id="llamado-4"  class="flex flex-row my-2 h-[16%] space-x-1">
						<div class="bg-white rounded-md w-3/4">
							<div class="text-8xl flex items-center font-semibold  justify-center h-full overflow-hidden">
								<p id="llamado-turno-4"></p>
							</div>
						</div>
						<div class="bg-white rounded-md w-1/4">
							<div class="text-8xl flex items-center font-semibold  justify-center h-full">
								<p id="llamado-caja-4"></p>
							</div>
						</div>
					</div>
					<div id="llamado-5" class="flex flex-row my-2 h-[16%] space-x-1">
						<div class="bg-white rounded-md w-3/4">
							<div class="text-8xl flex items-center font-semibold  justify-center h-full overflow-hidden">
								<p id="llamado-turno-5"></p>
							</div>
						</div>
						<div class="bg-white rounded-md w-1/4">
							<div class="text-8xl flex items-center font-semibold  justify-center h-full">
								<p id="llamado-caja-5"></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>
<script>

function speak(hablar){
	
		console.log(hablar);
						  const text = hablar;
						  const synth = speechSynthesis
						  const voices = synth.getVoices()
						  const utterThis = new SpeechSynthesisUtterance(text)
						  //utterThis.voice = voices.find(v => v.name === 'Monica')
						  for(var i = 0; i < voices.length; i++ ) {
						//console.log("voice found = "+voices[i].name);
						if( voices[i].name =='Microsoft Sabina Desktop - Spanish (Mexico)'){
							utterThis.voice = voices[i];
		   					//console.log("entre " + i.toString() + ' ' + voices[i].name + ' ' + voices[i].uri);
	  					}
						}
						  utterThis.pitch = 3
						  utterThis.rate = 1
						  synth.speak(utterThis)
						
}
 
 function loadAndRender()
{
    $.post("ajaxOnload.php", {
            },function(htmlexterno) {
			
			console.log(htmlexterno); 
			  var f = htmlexterno;
				//alert(htmlexterno);
                if (f != null) {
					var obj = JSON.parse(f);	
					
					var turnos = obj['turnos'];
					var ventanillas=obj['ventanillas'];
					var hablar=obj['hablar'];
					var actuaT=obj['actualT'];
					var actualN=obj['actualN'];
					
					if(actuaT.length > 1){


						speak(hablar);
						
						$('#turno-actual').text(actuaT);
						$('#id-actual').text(actualN);
						
						//hablar(hablar);
						//para cambiar la voz
						//https://baumannzone.medium.com/make-your-browser-talk-with-javascript-614546028076
						//alert(hablar);
						
					}
					
					//Turnos	
					var porcionesT=turnos.split(',');
					var porcionesV=ventanillas.split(',');
					
					if(porcionesT[0].length > 1){
						//llamado-turno-1
						$('#llamado-turno-1').text(porcionesT[0]);
						$('#llamado-caja-1').text(porcionesV[0]);
				    
				    }
					if(porcionesT[1].length > 1){
						//llamado-turno-2
						$('#llamado-turno-2').text(porcionesT[1]);
						$('#llamado-caja-2').text(porcionesV[1]);
				    
				    }
                    if(porcionesT[2].length > 1){
						//llamado-turno-3
						$('#llamado-turno-3').text(porcionesT[2]);
						$('#llamado-caja-3').text(porcionesV[2]);
				    
				    }	
                    if(porcionesT[3].length > 1){
						//llamado-turno-4
						$('#llamado-turno-4').text(porcionesT[3]);
						$('#llamado-caja-4').text(porcionesV[3]);
				    
				    }	
					if(porcionesT[4].length > 1){
						//llamado-turno-5
						$('#llamado-turno-5').text(porcionesT[4]);
						$('#llamado-caja-5').text(porcionesV[4]);
				    
				    }					


				}
                
			  
			  
			});

}



$(document).ready(loadAndRender);
 

setInterval(loadAndRender,2100);
</script>







