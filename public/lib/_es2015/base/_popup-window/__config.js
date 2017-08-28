
export default function () {

    $(".popup").click(function(){
        window.open(this.href,"","width=600,height=500,resizable=yes,scrollbars=yes");
        return false;
    });

};
