import './bootstrap';
import './bootstrapV5';
// import './registerPageOne';
// import './jobList';

window.onload = function(e) {
    console.log('صفحه لود شد');
    switch (e.target.location.pathname) {
        case '/':
            console.log('بخش اول');
            break;
        case '/register-test':
            console.log('بخش دوم');
            break;
        case '/register-details':
            console.log('بخش سوم');
            break;
        default:
            break;
    }
};



