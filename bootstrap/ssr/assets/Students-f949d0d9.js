import { mergeProps, useSSRContext } from "vue";
import { ssrRenderAttrs, ssrRenderStyle, ssrRenderList, ssrInterpolate, ssrRenderAttr } from "vue/server-renderer";
import "@inertiajs/vue3";
const _sfc_main = {
  name: "Students",
  __ssrInlineRender: true,
  props: {
    students: Object
  },
  setup(__props) {
    return (_ctx, _push, _parent, _attrs) => {
      _push(`<div${ssrRenderAttrs(mergeProps({
        style: { "height": "300px", "width": "70%" },
        class: "overflow-hiddden shadow border-1 m-3 px-5"
      }, _attrs))}><div class="d-flex mb-1 pt-3"><h4>Students</h4><div class="col text-end"><small class="text-muted" style="${ssrRenderStyle({ "cursor": "pointer" })}">View All</small></div></div><table class="table table-hover"><thead><tr class=""><th>id</th><th>Photo</th><th>Name</th><th>Email</th><th>Phone</th><th>age</th></tr></thead><tbody style="${ssrRenderStyle({ "font-size": "small" })}"><!--[-->`);
      ssrRenderList(__props.students, (s) => {
        _push(`<tr><td>${ssrInterpolate(s.id)}</td><td><img${ssrRenderAttr("src", "/storage/" + s.profile_picture)} alt=""></td><td>${ssrInterpolate(s.name)}</td><td>${ssrInterpolate(s.email)}</td><td>${ssrInterpolate(s.phone)}</td><td>${ssrInterpolate(s.age)}</td></tr>`);
      });
      _push(`<!--]--></tbody></table></div>`);
    };
  }
};
const _sfc_setup = _sfc_main.setup;
_sfc_main.setup = (props, ctx) => {
  const ssrContext = useSSRContext();
  (ssrContext.modules || (ssrContext.modules = /* @__PURE__ */ new Set())).add("resources/js/Pages/Dashboard/Students.vue");
  return _sfc_setup ? _sfc_setup(props, ctx) : void 0;
};
export {
  _sfc_main as default
};
