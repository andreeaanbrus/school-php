var car = [0,0,0,0,0,0,0,0,0,0,0,0,0];
var cnt_total = 0;
var cnt_castig = 0;
var i_intoarce = 0;
var j_intoarce = 0;

function Sch( imag )
{
if( cnt_castig != 6 )
    {
        if( i_intoarce !== 0 )
        {
            Intoarce( i_intoarce );
            Intoarce( j_intoarce );
            i_intoarce = 0;
            j_intoarce = 0;
        }
        
        var my_img = document.getElementById(imag);
        var my_src = my_img.getAttribute('src');
        if( my_src === "img/laba.png")
        {
            if(car[imag] === 0 )
            {
                car[imag] = 1;
                    
                var cnt = 0;
                
                for( i = 1; i <= 12; i++)
                {
                    if(car[i] == 1)
                        cnt++;
                }
                
                if(cnt == 1 )
                {
                     my_img.setAttribute( 'src', "img/caine"+imag+".jpg");
                }
                else
                {
                    my_img.setAttribute( 'src', "img/caine"+imag+".jpg");
                    for( i = 1; i < 12; i++)
                        for( j = i + 1; j <= 12; j++)
                            if(car[i] == 1 && car[j] == 1)
                            {
                                cnt_total++;
                                if((i % 6 ) == (j % 6))
                                {
                                    car[i] = car[j] = 2;
                                    cnt_castig++;
                                }
                                else
                                {
                                    car[i] = car[j] = 0;
                                    i_intoarce = i;
                                    j_intoarce = j;
                                }
                            }
                }
                if( cnt == 2 && cnt_castig == 6 )
                {
                    alert("Ai castigat!");
                    window.location.href="./rezultat.php/?rez="+cnt_total;
                }
            }
        }
    }
};

function Intoarce(i)
{
    var my_img = document.getElementById(i);
    my_img.setAttribute( 'src', "img/laba.png");
}
