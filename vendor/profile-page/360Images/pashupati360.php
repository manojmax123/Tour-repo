   
    <a-scene>
        <a-assets>
            <img src="img/pashupati360.jpg" alt="lumbini 360 image" id="lumbini360">
        </a-assets>
        <a-sky src="#lumbini360" visibility="true"></a-sky>
        <a-camera>
                <a-cursor color="cyan"></a-cursor>
              </a-camera>
             <a-sphere position="9 1 1" radius="0.5" height="0.5" color="silver"
        event-set__enter="_event: mouseenter; _target: #cylinderText; visible: true"
        event-set__leave="_event: mouseleave; _target: #cylinderText; visible: false">
             <a-text id="cylinderText" value="Pashupati Entrance" align="center" color="#FFF" visible="false" position="-3 1 -0.2" rotation="0 270 0"
              width="10"  geometry="primitive: plane; width: 4" material="color: #333"></a-text>

              <!-- <a-animation attribute="material.color" to="red" duration="150" repeat="indefinite"></a-animation> -->
    </a-sphere>

    <a-text value="Way to Main Temple" position="-15 3 -20" rotation="-4 90 0" width="120"></a-text>
 
    </a-scene> 

    <script src="https://aframe.io/releases/0.9.2/aframe.min.js"></script>
<script src="https://unpkg.com/aframe-event-set-component@3.0.3/dist/aframe-event-set-component.min.js"></script>
