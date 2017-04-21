# canvas-resize-img
此demo提供从文件选择，canvas压缩，上传服务器，前端页面显示图片的全部功能。
压缩原理是等比缩放，如果原图宽度大于500，则压缩到宽度为500；小于500不压缩。如需更改宽度限制，更改index.html的pageConfig的值即可。
```
var pageConfig = {maxImgWidth:500}
```
