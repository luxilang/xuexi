YUI.add("moodle-atto_wiris-button",function(e,t){e.namespace("M.atto_wiris").Button=e.Base.create("button",e.M.editor_atto.EditorPlugin,[],{_lang:"en",initializer:function(){window.wrs_int_notifyWindowClosed=function(){window._wrs_int_popup=null,window._wrs_temporalImage=null,window._wrs_isNewElement=!0},window.wrs_int_updateFormula=function(e,t){var n=window._wrs_int_currentPlugin.get("host").editor.getDOMNode();wrs_updateFormula(n,window,e,null,t),window._wrs_int_currentPlugin.markUpdated(),window._wrs_int_currentPlugin._updateEditorImgHandlers()},window.wrs_int_updateCAS=function(e,t,n,r){var i=window._wrs_int_currentPlugin.get("host").editor.getDOMNode();wrs_updateCAS(i,window,e,t,n,r),window._wrs_int_currentPlugin.markUpdated(),window._wrs_int_currentPlugin._updateCasImgHandlers()},window._wrs_int_conf_file="integration/configurationjs.php",window._wrs_int_conf_path=M.cfg.wwwroot+"/lib/editor/atto/plugins/wiris",window._wrs_int_conf_async=!0,window._wrs_int_popup=window._wrs_int_popup||null,window._wrs_int_coreLoading=window._wrs_int_coreLoading||!1,window._wrs_int_path=window._wrs_int_conf_file.split("/"),window._wrs_int_path.pop(),window._wrs_int_path=window._wrs_int_path.join("/"),window._wrs_int_path=window._wrs_int_path.indexOf("/")==0||window._wrs_int_path.indexOf("http")==0?window._wrs_int_path:window._wrs_int_conf_path+"/"+window._wrs_int_path,window._wrs_isMoodle24=!0,window._wrs_int_coreLoading||(window._wrs_int_coreLoading=!0,e.Get.js(window._wrs_int_conf_path+"/core/core.js",function(e){e}));var t=this.get("host"),n=this;t.on("change",function(){n._unparseContent()}),t._wirisUpdateFromTextArea=t.updateFromTextArea,t.updateFromTextArea=function(){t._wirisUpdateFromTextArea(),n._parseContent()},this._parseContent(),this._addButtons()},_addButtons:function(){if(window._wrs_conf_plugin_loaded){window._wrs_conf_editorEnabled&&this.addButton({title:"wiris_editor_title",buttonName:"wiris_editor",icon:"formula",iconComponent:"atto_wiris",callback:this._editorButton}),window._wrs_conf_CASEnabled&&this.addButton({title:"wiris_cas_title",buttonName:"wiris_cas",icon:"cas",iconComponent:"atto_wiris",callback:this._casButton});var t=this.get("host");t.plugins.collapse&&t.plugins.collapse._setVisibility(t.plugins.collapse.buttons.collapse)}else e.later(50,this,this._addButtons)},_editorButton:function(){if(_wrs_int_popup)_wrs_int_popup.focus();else{var e=this.get("host");_wrs_int_currentPlugin=this,_wrs_int_popup=wrs_openEditorWindow(this._lang,e.editor.getDOMNode(),!1)}},_casButton:function(){if(_wrs_int_popup)_wrs_int_popup.focus();else{var e=this.get("host");_wrs_int_currentPlugin=this,_wrs_int_popup=wrs_openCASWindow(e.editor.getDOMNode(),!1,this._lang)}},_parseContent:function(){if(window._wrs_conf_plugin_loaded){var t=this.get("host"),n=t.editor.get("innerHTML");n=wrs_initParse(n,this._lang),t.editor.set("innerHTML",n),this.markUpdated(),this._updateCasImgHandlers(),this._updateEditorImgHandlers()}else e.later(50,this,this._parseContent)},_unparseContent:function(){if(window._wrs_conf_plugin_loaded){var t=this.get("host"),n=t.textarea.get("value");n=wrs_endParse(n,null,this._lang),t.textarea.set("value",n)}else e.later(50,this,this._unparseContent)},_handleFormulaDoubleClick:function(e){window._wrs_temporalImage=e.currentTarget.getDOMNode(),window._wrs_isNewElement=!1,this._editorButton(),e.stopPropagation()},_handleCasDoubleClick:function(e){window._wrs_temporalImage=e.currentTarget.getDOMNode(),window._wrs_isNewElement=!1,this._casButton(),e.stopPropagation()},_updateEditorImgHandlers:function(){this.editor.all("img.Wirisformula").each(function(e){e.detachAll("dblclick"),e.on("dblclick",this._handleFormulaDoubleClick,this)},this)},_updateCasImgHandlers:function(){this.editor.all("img.Wiriscas").each(function(e){e.detachAll("dblclick"),e.on("dblclick",this._handleCasDoubleClick,this)},this)}})},"@VERSION@",{requires:["moodle-editor_atto-plugin","get"]});
