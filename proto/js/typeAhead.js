console.log("run");
var todos = {
    url: '../../api/topic/typeAhead.php',
    prepare: function(query, settings) {
        settings.url += '?query=' + query;
        return settings;
    },
    filter: function(tags) {

        console.log("tags: " + tags);
        return tags;
    }
};

var tags = new Bloodhound({
    datumTokenizer: Bloodhound.tokenizers.whitespace,
    queryTokenizer: Bloodhound.tokenizers.whitespace,
    remote: todos
});

tags.initialize();

console.log($("#tags").length);
$("#tags").tagsinput({
    allowDuplicates: true,
    typeaheadjs: {
        name: "tags",
        source: tags.ttAdapter(),
        limit: 10
    },
    freeInput: true
});