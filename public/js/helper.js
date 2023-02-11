const showError = (obj, errors) => {
    let string = '<div class = "alert alert-danger mb-0 alert-dismissible fade show" role="alert"> <ol class = "mb-0 list-group list-group-numbered">';
    errors.forEach(element => {
        string += '<li class = "d-block" >' + element + '</li>';
    });
    string += `</ol>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>`;
    obj.html(string);
}

const convertDateToDateTime = (date) => {
    var datetime = new Date(date).toLocaleString('vi-VN', {
        month: '2-digit',
        day: '2-digit',
        year: 'numeric',
        hour: '2-digit',
        minute: 'numeric',
        hour12: false,
    });

    return datetime;
}

const renderPagination = (links) => {
    links = links ? links : [];

    links.forEach(each => {
        $('.pagination')
            .append($(`<li class="page-item ${each.active ? 'active' : ''}" >`)
                .append(
                    `<a class ="page-link"
                    ${each.url ? "page=" + each.url.split("page=").pop() : ''}
                >${each.label}</a> `
                )
            )
    });
}

const notifySuccess = (message) => {
    $.toast({
        text: message,
        showHideTransition: 'slide',
        position: 'top-right',
        icon: 'info'
    })
}

const notifyError = (message) => {
    $.toast({
        text: message,
        showHideTransition: 'slide',
        position: 'bottom-right',
        icon: 'error'
    })
}

const isInt = (n) => {
    return n % 1 === 0;
}

const isFloat = (n) => {
    return n % 1 !== 0;
}

const addClassStatus = (status) => {
    if (status == 0) return 'badge-info'
    else if (status == 1) return 'badge-success'
    else if (status == 2) return 'badge-secondary'
    else if (status == 3) return 'badge-warning'

    return '';
}

const getTimeAgo = (seconds) => {
    var seconds = new Date().getTime() / 1000 - seconds;

    var interval = seconds / 31536000;
    if (interval > 1) {
        return Math.floor(interval) + "yr";
    }
    interval = seconds / 2592000;
    if (interval > 1) {
        return Math.floor(interval) + "mth";
    }
    interval = seconds / 86400;
    if (interval > 1) {
        return Math.floor(interval) + "d";
    }
    interval = seconds / 3600;
    if (interval > 1) {
        return Math.floor(interval) + "h";
    }
    interval = seconds / 60;
    if (interval > 1) {
        return Math.floor(interval) + "m";
    }
    return "0m";
}

const pushState = (category, status_radio, sort_radio, timeType, search) => {
    let url = '?';
    url += search.trim() ? `search=${search}&` : '';
    url += category ? `category=${category}&` : '';
    url += status_radio ? `status=${status_radio}&` : '';
    url += sort_radio ? `sort=${sort_radio}&` : '';
    url += timeType ? `timeType=${timeType}` : '';

    window.history.pushState("", "", url);
}