
						<input name="agregar_titulo" class="form-control" type="text" placeholder="ingresa un titulo" style="position:absolute; width:97%; height:9%; color:black; text-align:center; font-size:3vw; font-size:3vh; border-color:#DFE2E4;">
						<textarea name="agregar_descripcion" class="form-control" type="text" placeholder="descripcion" style="position:absolute; top:11.2%; width:97%; height:7%; color:#9A9B9B; text-align:center; font-size:1vw; font-size:2vh; border-color:#DFE2E4;"></textarea>
						<input name="agregar_url" class="form-control" type="text" placeholder="url imagen" style="position:absolute; top:20%; width:48.5%; height:7%; color:black; text-align:center; font-size:3vw; font-size:3vh; border-color:#DFE2E4;">
						<input name="agregar_url_poster" class="form-control" type="text" placeholder="url poster" style="position:absolute; left:49.9%; top:20%; width:48.5%; height:7%; color:black; text-align:center; font-size:3vw; font-size:3vh; border-color:#DFE2E4;">
						<div class="form-control" style="position:absolute; width:97%; height:7.6%; background:; top:26.6%; text-align:center; font-size:1vw; font-size:2vh; border-color:#DFE2E4;">
							<i id="fontname" class="circular font link icon" data-toggle="modal" data-target="#fontnamem"></i>
							<select  id="fontsize">
								<option value="1">1</option>
								<option selected value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
							</select>
							
							<i id="bold" class="circular bold link icon" onclick="FormatText('bold');"></i>
							<i id="underline" class="circular underline link icon"></i>
							<i id="italic" class="circular italic link icon"></i>
							<i id="justifyfull" class="circular align justify link icon"></i>
							<i id="justifyleft" class="circular align left link icon"></i>
							<i id="justifycenter" class="circular align center link icon"></i>
							<i id="justifyright" class="circular align right link icon"></i>
							<i id="list" class="circular list link icon"></i>
							<i id="image" class="circular file image outline link icon" data-toggle="modal" data-target="#imagem"></i>
						</div>
						<div class="editable form-control" contenteditable="true" id="agregar_contenido" onMouseUp="seleccion(this.selectionStart,this.selectionEnd)" name="agregar_contenido"  maxlength="" type="text" placeholder="contenido" style="overflow:auto; position:absolute; top:34%; width:97%;height:50%; color:#5C5C5C; text-align:left; font-size:1vw; font-size:2vh;  border-color:#DFE2E4;"></div>
						<textarea class="form-control"  id="a" onMouseUp="seleccion(this.selectionStart,this.selectionEnd)" name="a"  maxlength="" type="text" placeholder="contenido" style="position:absolute; top:34%; width:97%;height:50%; color:#5C5C5C; text-align:left; font-size:1vw; font-size:2vh;  border-color:#DFE2E4; display:none;"></textarea>
						<div id="error" style="text-align:right; position:absolute; top:87%; left:25%; height:10%; font-size:1.5vw; padding:1.5%; background:; width:40%; color:red;"></div>
						