import { mergeProps, useSSRContext } from "vue";
import { ssrRenderAttrs, ssrRenderComponent, ssrRenderStyle, ssrRenderList, ssrInterpolate, ssrRenderAttr } from "vue/server-renderer";
import SideBar from "./SideBar-2549fdbf.js";
import _sfc_main$1 from "./Nav-3593c9b6.js";
import _sfc_main$2 from "./Details-aae189ad.js";
import _sfc_main$3 from "./Edit-ded58c18.js";
import "@inertiajs/vue3";
import "./_plugin-vue_export-helper-cc2b3d55.js";
import "./Profile-dbfff9d9.js";
const _sfc_main = {
  name: "Index",
  __ssrInlineRender: true,
  props: {
    students: Object
  },
  setup(__props) {
    return (_ctx, _push, _parent, _attrs) => {
      _push(`<div${ssrRenderAttrs(mergeProps({ class: "d-flex" }, _attrs))}>`);
      _push(ssrRenderComponent(SideBar, null, null, _parent));
      _push(`<div class="col">`);
      _push(ssrRenderComponent(_sfc_main$1, null, null, _parent));
      _push(`<div class="mx-3"><div class="d-flex mb-4 pt-3 border-bottom"><h4>Students</h4><div class="col text-end"><small class="text-muted" style="${ssrRenderStyle({ "cursor": "pointer" })}"></small></div></div><table class="table table-hover rounded-5"><thead><tr class=""><th>id</th><th>Photo</th><th>Name</th><th>Email</th><th>Phone</th><th>age</th><th>level</th><th>board</th><th></th></tr></thead><tbody style="${ssrRenderStyle({ "font-size": "small" })}"><!--[-->`);
      ssrRenderList(__props.students.data, (s) => {
        _push(`<tr><td>${ssrInterpolate(s.id)}</td><td><img${ssrRenderAttr("src", "/storage/" + s.profile_picture)} alt=""></td><td>${ssrInterpolate(s.name)}</td><td>${ssrInterpolate(s.email)}</td><td>${ssrInterpolate(s.phone)}</td><td>${ssrInterpolate(s.age)}</td><td>${ssrInterpolate(s.level)}</td><td>${ssrInterpolate(s.board)}</td><td class="text-center"><button class="btn btn-outline-success" data-bs-toggle="modal"${ssrRenderAttr("data-bs-target", `#staticBackdrop${s.id}`)}>View</button>`);
        _push(ssrRenderComponent(_sfc_main$2, { student: s }, null, _parent));
        _push(`<button class="btn btn-outline-warning ms-2" data-bs-toggle="modal"${ssrRenderAttr("data-bs-target", `#staticBackdropEdit${s.id}`)}>Edit</button>`);
        _push(ssrRenderComponent(_sfc_main$3, { student: s }, null, _parent));
        _push(`<button class="btn btn-outline-danger ms-2">Delete</button></td></tr>`);
      });
      _push(`<!--]--></tbody></table></div></div></div>`);
    };
  }
};
const _sfc_setup = _sfc_main.setup;
_sfc_main.setup = (props, ctx) => {
  const ssrContext = useSSRContext();
  (ssrContext.modules || (ssrContext.modules = /* @__PURE__ */ new Set())).add("resources/js/Pages/Students/Index.vue");
  return _sfc_setup ? _sfc_setup(props, ctx) : void 0;
};
export {
  _sfc_main as default
};
