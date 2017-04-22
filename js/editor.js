        ace.require("ace/ext/language_tools");

        var htmlEditor = ace.edit("html-editor");
        htmlEditor.setTheme("ace/theme/crimson-editor");
        htmlEditor.getSession().setMode("ace/mode/html");
        htmlEditor.setOptions({
            enableBasicAutocompletion: true,
            wrapBehavioursEnabled: true,
            wrap:true
        });

        var cssEditor = ace.edit("css-editor");
        cssEditor.setTheme("ace/theme/crimson-editor");
        cssEditor.getSession().setMode("ace/mode/css");
        cssEditor.setOptions({
            enableBasicAutocompletion: true,
            wrapBehavioursEnabled: true,
            wrap:true
        });

        var jsEditor = ace.edit("js-editor");
        jsEditor.setTheme("ace/theme/crimson-editor");
        jsEditor.getSession().setMode("ace/mode/javascript");
        jsEditor.setOptions({
            enableBasicAutocompletion: true,
            wrapBehavioursEnabled: true,
            wrap: true
        });
        
        var uploadhtml = document.getElementById("uploadhtml");
        var openhtml = document.getElementById("openhtml");
        var uploadcss = document.getElementById("uploadcss");
        var opencss = document.getElementById("opencss");
        var uploadjs = document.getElementById("uploadjs");
        var openjs = document.getElementById("openjs");
        var btnReset = document.getElementById("btnReset");
        var preview = document.getElementById("preview");
        var savepdf = document.getElementById("btnPDF");
        var save = document.getElementById("btnSave");
        var savehtml = document.getElementById("savehtml");
        var savecss = document.getElementById("savecss");
        var savejs = document.getElementById("savejs");
        var btnshare = document.getElementById("btnShare");
        var btninfo = document.getElementById("btnInfo");
        var designPDF = document.getElementById("designPDF");
        function simulateclickhtml(){
            uploadhtml.click();
        }       
        
        function simulateclickcss(){
            uploadcss.click();
        }
        
        function simulateclickjs() {
            uploadjs.click();
        }
        
        function resetAll(){
            htmlEditor.setValue("");
            cssEditor.setValue("");
            jsEditor.setValue("");
            preview.contentDocument.documentElement.innerHTML = "";            
        }
        function loadHTML(){
            var fileToLoad = uploadhtml.files[0];
              var fileReader = new FileReader();
              fileReader.onload = function(fileLoadedEvent) {
                var textFromFileLoaded = fileLoadedEvent.target.result;
                htmlEditor.setValue(fileLoadedEvent.target.result);
              };
              fileReader.readAsText(fileToLoad, "UTF-8");
           }
        function loadCSS(){
            var fileToLoad = uploadcss.files[0];
              var fileReader = new FileReader();
              fileReader.onload = function(fileLoadedEvent) {
                var textFromFileLoaded = fileLoadedEvent.target.result;
                cssEditor.setValue(fileLoadedEvent.target.result);
              };
              fileReader.readAsText(fileToLoad, "UTF-8");
           }
        
        function loadJS(){
            var fileToLoad = uploadjs.files[0];
              var fileReader = new FileReader();
              fileReader.onload = function(fileLoadedEvent) {
                var textFromFileLoaded = fileLoadedEvent.target.result;
                jsEditor.setValue(fileLoadedEvent.target.result);
              };
              fileReader.readAsText(fileToLoad, "UTF-8");
        }
        
      function saveTextAsFile(input, output) {
    			var textToWrite = input;
    			var textFileAsBlob = new Blob([textToWrite], {type:'text/plain'});
    			var fileNameToSaveAs = output;
    			var downloadLink = document.createElement("a");
    			downloadLink.download = fileNameToSaveAs;
    			downloadLink.innerHTML = "<a class='btn'>Download File</a>";
    			downloadLink.href = window.URL.createObjectURL(textFileAsBlob);
    			downloadLink.onclick = destroyClickedElement;
    			downloadLink.style.display = "none";
    			document.body.appendChild(downloadLink);
    			downloadLink.click();
    			return [input, output];		
      }

       function saveTextAsFile(input, output) {
    			var textToWrite = input;
    			var textFileAsBlob = new Blob([textToWrite], {type:'text/plain'});
    			var fileNameToSaveAs = output;
    			var downloadLink = document.createElement("a");
    			downloadLink.download = fileNameToSaveAs;
    			downloadLink.innerHTML = "<a class='btn'>Download File</a>";
    			downloadLink.href = window.URL.createObjectURL(textFileAsBlob);
    			downloadLink.onclick = destroyClickedElement;
    			downloadLink.style.display = "none";
    			document.body.appendChild(downloadLink);
    			downloadLink.click();
    			return [input, output];		
      }
      
      function destroyClickedElement(event) {
        	document.body.removeChild(event.target);
      }

        function saveHtmlAsFile(input, output) {
    			var textToWrite = input;
    			var textFileAsBlob = new Blob([textToWrite], {type:'text/html'});
    			var fileNameToSaveAs = output;
    			var downloadLink = document.createElement("a");
    			downloadLink.download = fileNameToSaveAs;
    			downloadLink.innerHTML = "<a class='btn'>Download File</a>";
    			downloadLink.href = window.URL.createObjectURL(textFileAsBlob);
    			downloadLink.onclick = destroyClickedElement;
    			downloadLink.style.display = "none";
    			document.body.appendChild(downloadLink);
    			downloadLink.click();
    			return [input, output];		
      }
        
        function exportHTML(){
          	var source = preview.contentDocument.documentElement.outerHTML;
          	var outputHTML = "index";
  				  saveHtmlAsFile(source, outputHTML + '.html');
        }
       
        
        function saveHTML(){
          	var source = htmlEditor.getValue();
          	var outputHTML = "index";
  				  saveTextAsFile(source, outputHTML + '.html');
        }
        
        function saveCSS(){
          	var source = cssEditor.getValue();
          	var outputCSS = "style";
    				saveTextAsFile(source, outputCSS + '.css');   
        }
        function saveJS(){
        	var source =jsEditor.getValue();
        	var outputJS = "app";
    			saveTextAsFile(source, outputJS + '.js');    
        }
        
        
        function saveData(){
        	  saveLocalstorage(htmlEditor, 'html');
            saveLocalstorage(cssEditor, 'css');  
            saveLocalstorage(jsEditor, 'js');
        }
        window.onload = function(){
        	saveData();
        }
        
        function saveLocalstorage(inputData, setElm) {    
            inputData.onblur = function() {
                localStorage.setItem(setElm, this.getValue());
            };
                if (localStorage.getItem(setElm)) {
                inputData.setValue(localStorage.getItem(setElm));
            }
        }
        function helpBeautify(){
        	var help = "Click on TidyUp to beautify html result and all source code";
        	alert(help);
        	return help;
        }
        openjs.addEventListener("click", simulateclickjs, false);
        opencss.addEventListener("click", simulateclickcss, false);
        openhtml.addEventListener("click", simulateclickhtml, false);
        uploadhtml.addEventListener("change", loadHTML, false);
        uploadcss.addEventListener("change", loadCSS, false);
        uploadjs.addEventListener("change", loadJS, false);
        btnReset.addEventListener("click", resetAll, false);
        btnSave.addEventListener("click", exportHTML, false);
        savehtml.addEventListener("click", saveHTML, false);
        savecss.addEventListener("click", saveCSS, false);
        savejs.addEventListener("click", saveJS, false);