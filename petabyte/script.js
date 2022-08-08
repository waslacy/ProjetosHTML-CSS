var flag = 1
var right = 0
var carrosel = document.getElementById('carrosel')

function carousel(x){
    let divCarrosel = document.getElementById('items').offsetWidth
    let dif = (carrosel.offsetWidth - divCarrosel)

    switch (x){
        case 'esquerda':
            if(right == dif && carrosel.offsetWidth == 1620){
                flag = Math.floor(dif / 180) - 1
                right = flag * 180
                flag++
                break;
            }else if(right == dif){
                flag = Math.floor(dif / 205)
                right = flag * 205
                flag++
                break;
            }

            if(right != 0 && right != dif && carrosel.offsetWidth == 1620){
                flag -= 2
                right = flag * 180
                flag ++
            }else if(right != 0 && right != dif){
                flag -= 2
                right = flag * 205
                flag ++
            } else if(right == 0){
                right = dif
            }
            break;
        
        case 'direita':
            if(carrosel.offsetWidth == 1620){
                right = flag * 180 
            }else if(right < dif){
                right = flag * 205 
            }

            if(right == dif){
                flag = 0
                right = 0
            } else if((right + 205) > dif){
                right += dif - right
            }
            flag ++
            break;
    }

    carrosel.style.right = `${right}px`
}
