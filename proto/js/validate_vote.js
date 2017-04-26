function verifyVote(type,topicId){
    var voteType=type;
    var topic=topicId;

    $.ajax({
        type: "post",
        url: "../../api/topic/validate_vote.php",
        data: {voteType:voteType,topicId:topic}
    }).done(function(data){
        console.log(data);
        var value=JSON.parse(data);

        console.log($(this).html());
        /*console.log("R: "+rat);
        if(value==0){
            rat++;
            $(this).siblings('.rating.btn').text(+rat+1);
        }*/

        //se foi possível adicionar mostrar notificação
    });

    return false;
}