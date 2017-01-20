var io = require('socket.io')(6002);
var Redis = require('ioredis');
redis = new  Redis();
redis.psubscribe('*',function (error, count){
    // socket.send('so luong' + count);
});
redis.on('pmessage', function(pattern, channel, message){
    console.log(channel, message);
    // socket.send('ket noi' + channel);
    message = JSON.parse(message);
    io.emit(channel + ':' + message.event, message.data);
    // // channel:message.event
});

// io.on('connection', function(socket){
//     socket.on('subscribe', function(channel){
//         console.log('I want to subscribe on:', channel);
//
//         // request.get({
//         //     url : 'http://larasocket.local/ws/check-sub/' + channel,
//         //     headers : {cookie : socket.request.headers.cookie},
//         //     json : true
//         // }, function(error, response, json) {
//         //     if(json.can) {
//                 socket.join(channel, function(error){
//                     socket.send('Join to ' + channel);
//                 });
//         //         return;
//         //     }
//         // });
//     });
// });
