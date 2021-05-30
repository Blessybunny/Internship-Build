/*eslint-env es6*//*eslint-env jquery*//*eslint-env browser*//*eslint no-console: 0*/ `use strict`;

//APPAREL DATA
    const apparel = {
        //Data and constructor
        list: [],
        create: function (name, price, imgUrl) {
            apparel.list.push({
                id: apparel.list.length,
                name: name,
                price: price,
                imgUrl: imgUrl
            });
        },
        //DOM
        modOffLink: function (apparelId, domTarget) {
            //Find id
            let apparelTarget = undefined;
            for (let i in apparel.list) {
                if (apparel.list[i].id === apparelId) {
                    apparelTarget = apparel.list[i];
                    break;
                }
            }
            
            //DOM
            domTarget.href = domTarget.href + ``;
            domTarget.innerHTML = `
                <img src = "${apparelTarget.imgUrl}"/>
                <h4>${apparelTarget.name}</h4>
                <h6>From PHP ${apparelTarget.price}</h6>
            `;
        },
        modPageLink: function (apparelId, domTarget) {
            //Find id
            let apparelTarget = undefined;
            for (let i in apparel.list) {
                if (apparel.list[i].id === apparelId) {
                    apparelTarget = apparel.list[i];
                    break;
                }
            }
            
            //DOM
            domTarget.href = domTarget.href + ``;
            domTarget.innerHTML = `
                <img src = "${apparelTarget.imgUrl}"/>
                <h4>${apparelTarget.name}</h4>
                <h6>From PHP ${apparelTarget.price}</h6>
            `;
        }
    };

//APPARELS: Shirt Male Igorotak (12 total - IDs 0-11 = 12 total)
    apparel.create(`Floating Igorotak Django Shirt`, 480, `./img/shirt-men-igorotak/floating-igorotak-django-shirt-480.jpg`);
    apparel.create(`Floating Igorotak Shirt`, 450, `./img/shirt-men-igorotak/floating-igorotak-shirt-450.jpg`);
    apparel.create(`Igorotak Beads Django Shirt`, 480, `./img/shirt-men-igorotak/igorotak-beads-django-shirt-480.jpg`);
    apparel.create(`Igorotak Beads Shirt`, 480, `./img/shirt-men-igorotak/igorotak-beads-shirt-480.jpg`);
    apparel.create(`Igorotak Seal Django Shirt`, 450, `./img/shirt-men-igorotak/igorotak-seal-django-shirt-450.jpg`);
    apparel.create(`Igorotak Seal Shirt`, 480, `./img/shirt-men-igorotak/igorotak-seal-shirt-480.jpg`);
    apparel.create(`Igorotak Splash Shirt`, 450, `./img/shirt-men-igorotak/igorotak-splash-shirt-450.jpg`);
    apparel.create(`Igorotak Tangkil Shirt`, 480, `./img/shirt-men-igorotak/igorotak-tangkil-shirt-480.jpg`);
    apparel.create(`Igo Strip Shirt`, 480, `./img/shirt-men-igorotak/igo-strip-shirt-480.jpg`);
    apparel.create(`Igo Weave Necklace Django Shirt`, 480, `./img/shirt-men-igorotak/igo-weave-necklace-django-shirt-480.jpg`);
    apparel.create(`Igo Weave Necklace Shirt`, 450, `./img/shirt-men-igorotak/igo-weave-necklace-shirt-450.jpg`);
    apparel.create(`Series 1 Igorotak Shirt`, 450, `./img/shirt-men-igorotak/series-1-igorotak-shirt-450.jpg`);

//APPARELS: Shirt Ladies (6 total - IDs 12-17 = 18 total)
    apparel.create(`Igorotak Seal V-neck Shirt`, 460, `./img/shirt-ladies/igorotak-seal-v-neck-shirt-460.jpg`);
    apparel.create(`Igorotak Splash V-neck Shirt`, 460, `./img/shirt-ladies/igorotak-splash-v-neck-shirt-460.jpg`);
    apparel.create(`Igorotak Weave V-neck Shirt`, 460, `./img/shirt-ladies/igorotak-weave-v-neck-shirt-460.jpg`);
    apparel.create(`Igo Tribal 3 V-neck Shirt`, 460, `./img/shirt-ladies/igo-tribal-3-v-neck-shirt-460.jpg`);
    apparel.create(`Pattong V-neck Shirt`, 460, `./img/shirt-ladies/pattong-v-neck-shirt-460.jpg`);
    apparel.create(`Sangi V-neck Shirt`, 460, `./img/shirt-ladies/sangi-v-neck-shirt 460.jpg`);

//APPARELS: Accessories (3 total - IDs 18-20 = 21 total)
    apparel.create(`3-Ply Face Mask (Cordillera Inspired Woven Cloth)`, 175, `./img/accessories/3-ply-face-mask-cordillera-inspired-woven-cloth-175.jpg`);
    apparel.create(`3-Ply Face Mask (Sagada Weaving Cloth)`, 175, `./img/accessories/3-ply-face-mask-sagada-weaving-cloth-175.jpg`);
    apparel.create(`Balikbayan Hat`, 620, `./img/accessories/balikbayan-hat-620.jpg`);

//APPARELS: Other prints (7 total - IDs 21-27 = 28 total)
    apparel.create(`Green Necktie Shirt`, 480, `./img/shirt-other-prints/green-necktie-shirt-480.jpg`);
    apparel.create(`Igorot War Dance Shirt`, 450, `./img/shirt-other-prints/igorot-war-dance-shirt-450.jpg`);
    apparel.create(`Pinikpikan Django Shirt`, 480, `./img/shirt-other-prints/pinikpikan-django-shirt-480.jpg`);
    apparel.create(`Pinikpikan Shirt`, 450, `./img/shirt-other-prints/pinikpikan-shirt-450.jpg`);
    apparel.create(`Red Necktie Shirt`, 480, `./img/shirt-other-prints/red-necktie-shirt-480.jpg`);
    apparel.create(`Sangi Shirt`, 450, `./img/shirt-other-prints/sangi-shirt-450.jpg`);
    apparel.create(`Tangkil Django Shirt`, 450, `./img/shirt-other-prints/tangkil-django-shirt-450.jpg`);