/**
 * Created by diamond on 7/7/16.
 */
'use strict';
var $chatRoom = $('#chat-room');
var $sendMessage = $('#send-message');
var $messageInput = $sendMessage.find('input[name=message]');
var io = window.io;
var socket = io('127.0.0.1:9000');

$sendMessage.on('submit', function () {
    $.post(this.action, $sendMessage.serialize());
    $messageInput.val('');
    return false;
});

socket.on('chat-channel:App\\Events\\MessageCreated', function (payload) {

    var html = '<div class="message alert-info" style="display: none;">';
    html += payload.username + ': ';
    html += payload.message;
    html += '</div>';
    console.log(html);

    var $message = $(html);
    $chatRoom.append($message);
    $message.fadeIn('fast');
    $chatRoom.animate({scrollTop: $chatRoom[0].scrollHeight}, 1000);
    console.log($message);

});